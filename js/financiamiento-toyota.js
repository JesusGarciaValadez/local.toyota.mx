$(function() {


  var ExcelFormulas = {

    PVIF: function(rate, nper) {
      return Math.pow(1 + rate, nper);
    },

    FVIFA: function(rate, nper) {
      return rate == 0? nper: (this.PVIF(rate, nper) - 1) / rate;
    },

    PMT: function(rate, nper, pv, fv, type) {
      if (!fv) fv = 0;
      if (!type) type = 0;

      if (rate == 0) return -(pv + fv)/nper;

      var pvif = Math.pow(1 + rate, nper);
      var pmt = rate / (pvif - 1) * -(pv * pvif + fv);

      if (type == 1) {
        pmt /= (1 + rate);
      };

      return pmt;
    },

    IPMT: function(pv, pmt, rate, per) {
      var tmp = Math.pow(1 + rate, per);
      return 0 - (pv * tmp * rate + pmt * (tmp - 1));
    },

    PPMT: function(rate, per, nper, pv, fv, type) {
      if (per < 1 || (per >= nper + 1)) return null;
      var pmt = this.PMT(rate, nper, pv, fv, type);
      var ipmt = this.IPMT(pv, pmt, rate, per - 1);
      return pmt - ipmt;
    },

    DaysBetween: function(date1, date2) {
      var oneDay = 24*60*60*1000;
      return Math.round(Math.abs((date1.getTime() - date2.getTime())/oneDay));
    },

    // Change Date and Flow to date and value fields you use
    XNPV: function(rate, values) {
      var xnpv = 0.0;
      var firstDate = new Date(values[0].Date);
      for (var key in values) {
        var tmp = values[key];
        var value = tmp.Flow;
        var date = new Date(tmp.Date);
        xnpv += value / Math.pow(1 + rate, this.DaysBetween(firstDate, date)/365);
      };
      return xnpv;
    },

    XIRR: function(values, guess) {
      if (!guess) guess = 0.1;

      var x1 = 0.0;
      var x2 = guess;
      var f1 = this.XNPV(x1, values);
      var f2 = this.XNPV(x2, values);

      for (var i = 0; i < 100; i++) {
        if ((f1 * f2) < 0.0) break;
        if (Math.abs(f1) < Math.abs(f2)) {
          f1 = this.XNPV(x1 += 1.6 * (x1 - x2), values);
        }
        else {
          f2 = this.XNPV(x2 += 1.6 * (x2 - x1), values);
        }
      };

      if ((f1 * f2) > 0.0) return null;

      var f = this.XNPV(x1, values);
      if (f < 0.0) {
        var rtb = x1;
        var dx = x2 - x1;
      }
      else {
        var rtb = x2;
        var dx = x1 - x2;
      };

      for (var i = 0; i < 100; i++) {
        //console.log('ahí les voy '+i);
        dx *= 0.5;
        var x_mid = rtb + dx;
        var f_mid = this.XNPV(x_mid, values);
        if (f_mid <= 0.0) rtb = x_mid;
        if ((Math.abs(f_mid) < 1.0e-6) || (Math.abs(dx) < 1.0e-6)) return x_mid;
      };
      //console.log('regreso null');
      return null;
    }

  };

  var modelos = {
    'LE'     : 1527,
    'XLE'     : 1528,
    'Limited Blu-Ray'          : 1529,
    'LTD Panorama Roof'        : 1530
  };

  var txt_creditos = {
    'estandar' : 'Con el crédito estándar, tus pagos son iguales durante toda la vida del crédito. Tendrás la tranquilidad de que tus pagos siempre serán iguales.',
    'balloon'  : 'Con el crédito Balloon 35, el 35% del valor del auto se pagará junto con tu última mensualidad, por lo que el resto de tus pagos serán más bajos que en un plan estándar.'
  };

  var precios = {
    'LE'   : 47390000,
    'XLE'   : 53440000,
    'Limited Blu-Ray'        : 61990000,
    'LTD Panorama Roof'      : 60040000
  };

  var seguros = {
    'BASE MT'     : {
      'amplia'    : {
        '12' : 1326816,
        '18' : 1953961,
        '24' : 2581106,
        '30' : 3190033,
        '36' : 3798960,
        '48' : 4981155,
        '60' : 6128982
      },
      'oro'  : {
        '12' : 1537901,
        '18' : 2267507,
        '24' : 2997112,
        '30' : 3705523,
        '36' : 4413935,
        '48' : 5789273,
        '60' : 7124628
      },
      'diamante' : {
        '12' : 1688751,
        '18' : 2491579,
        '24' : 3294407,
        '30' : 4073914,
        '36' : 4853421,
        '48' : 6366786,
        '60' : 7836156
      }
    },

    'BASE AT'     : {
      'amplia'    : {
        '12' : 1366686,
        '18' : 2013184,
        '24' : 2659681,
        '30' : 3287399,
        '36' : 3915117,
        '48' : 5133793,
        '60' : 6317041
      },
      'oro'  : {
        '12' : 1584819,
        '18' : 2337198,
        '24' : 3089578,
        '30' : 3820102,
        '36' : 4550626,
        '48' : 5968894,
        '60' : 7345931
      },
      'diamante' : {
        '12' : 1735669,
        '18' : 2561271,
        '24' : 3386873,
        '30' : 4188492,
        '36' : 4990112,
        '48' : 6546407,
        '60' : 8057460
      }
    },

    'LE'     : {
      'amplia'    : {
        '12' : 26189.95466,
        '18' : 38680.53125,
        '24' : 51171.10784,
        '30' : 63298.85557,
        '36' : 75426.6033,
        '48' : 98971.88057,
        '60' : 121832.6722
      },
      'oro'  : {
        '12' : 28725.15596,
        '18' : 42446.31926,
        '24' : 56167.48257,
        '30' : 69490.07067,
        '36' : 82812.65878,
        '48' : 108677.6452,
        '60' : 133790.7097
      },
      'diamante' : {
        '12' : 29526.32692,
        '18' : 43636.37861,
        '24' : 57746.4303,
        '30' : 71446.61028,
        '36' : 85146.79026,
        '48' : 111744.8481,
        '60' : 137569.6729
      }
    },

    'XLE'     : {
      'amplia'    : {
        '12' : 28840.32627,
        '18' : 42617.39325,
        '24' : 56394.46023,
        '30' : 69771.3281,
        '36' : 83148.19597,
        '48' : 109118.5633,
        '60' : 134333.945
      },
      'oro'  : {
        '12' : 31625.86095,
        '18' : 46755.02646,
        '24' : 61884.19196,
        '30' : 76573.88233,
        '36' : 91263.5727,
        '48' : 119782.7042,
        '60' : 147472.755
      },
      'diamante' : {
        '12' : 32427.03191,
        '18' : 47945.08581,
        '24' : 63463.1397,
        '30' : 78530.42194,
        '36' : 93597.70418,
        '48' : 122849.9071,
        '60' : 151251.7182
      }
    },

    'Limited Blu-Ray'     : {
      'amplia'    : {
        '12' : 32454.46939,
        '18' : 47985.84143,
        '24' : 63517.21348,
        '30' : 78597.427,
        '36' : 93677.64052,
        '48' : 122954.9488,
        '60' : 151381.1353
      },
      'oro'  : {
        '12' : 35581.36775,
        '18' : 52630.53627,
        '24' : 69679.70478,
        '30' : 86233.6255,
        '36' : 102787.5462,
        '48' : 134925.9665,
        '60' : 166130.0895
      },
      'diamante' : {
        '12' : 36382.53872,
        '18' : 53820.59562,
        '24' : 71258.65251,
        '30' : 88190.16511,
        '36' : 105121.6777,
        '48' : 137993.1694,
        '60' : 169909.0527
      }
    },

    'LTD Panorama Roof'     : {
      'amplia'    : {
        '12' : 31731.64076,
        '18' : 46912.1518,
        '24' : 62092.66283,
        '30' : 76832.20722,
        '36' : 91571.75161,
        '48' : 120187.6717,
        '60' : 147971.6972
      },
      'oro'  : {
        '12' : 34790.26639,
        '18' : 51455.4343,
        '24' : 68120.60222,
        '30' : 84301.67687,
        '36' : 100482.7515,
        '48' : 131897.314,
        '60' : 162398.6226
      },
      'diamante' : {
        '12' : 35591.43736,
        '18' : 52645.49365,
        '24' : 69699.54995,
        '30' : 86258.21648,
        '36' : 102816.883,
        '48' : 134964.5169,
        '60' : 166177.5858

      }
    },
  };

  var beneficios = {
    'deducibles' : {
      'diamante'  : '3% Daños Materiales y 5% Robo Total',
      'oro'       : '3% Daños Materiales y 5% Robo Total',
      'amplia'    : '5% Daños Materiales y 10% Robo Total'
    },
    'responsabilidad' : {
      'diamante'  : 1000000,
      'oro'       : 800000,
      'amplia'    : 600000
    },
    'auto_sustituto' : {
      'diamante'  : 'Amparado',
      'oro'       : 'Excluído',
      'amplia'    : 'Excluído'
    },
    'excencion_deducible' : {
      'diamante'  : 'Amparado',
      'oro'       : 'Amparado',
      'amplia'    : 'Excluído'
    }
  };



  function IRR(values, guess) {
    // Credits: algorithm inspired by Apache OpenOffice

    // Calculates the resulting amount
    var irrResult = function(values, dates, rate) {
      var r = rate + 1;
      var result = values[0];
      for (var i = 1; i < values.length; i++) {
        result += values[i] / Math.pow(r, (dates[i] - dates[0]) / 365);
      }
      return result;
    }

    // Calculates the first derivation
    var irrResultDeriv = function(values, dates, rate) {
      var r = rate + 1;
      var result = 0;
      for (var i = 1; i < values.length; i++) {
        var frac = (dates[i] - dates[0]) / 365;
        result -= frac * values[i] / Math.pow(r, frac + 1);
      }
      return result;
    }

    // Initialize dates and check that values contains at least one positive value and one negative value
    var dates = [];
    var positive = false;
    var negative = false;
    for (var i = 0; i < values.length; i++) {
      dates[i] = (i === 0) ? 0 : dates[i - 1] + 365;
      if (values[i] > 0) positive = true;
      if (values[i] < 0) negative = true;
    }

    // Return error if values does not contain at least one positive value and one negative value
    if (!positive || !negative) return '#NUM!';

    // Initialize guess and resultRate
    var guess = (typeof guess === 'undefined') ? 0.1 : guess;
    var resultRate = guess;

    // Set maximum epsilon for end of iteration
    var epsMax = 1e-10;

    // Set maximum number of iterations
    var iterMax = 50;

    // Implement Newton's method
    var newRate, epsRate, resultValue;
    var iteration = 0;
    var contLoop = true;
    do {
      resultValue = irrResult(values, dates, resultRate);
      newRate = resultRate - resultValue / irrResultDeriv(values, dates, resultRate);
      epsRate = Math.abs(newRate - resultRate);
      resultRate = newRate;
      contLoop = (epsRate > epsMax) && (Math.abs(resultValue) > epsMax);
    } while(contLoop && (++iteration < iterMax));

    if(contLoop) return '#NUM!';

    // Return internal rate of return
    return resultRate;
  };

  var precio_actual = 0;

  var Cotizador = {
    cotizar:function(){

      tipo_credito = $('#financiamiento-tipo-credito option:selected').val();
      tasa_interes = tipo_credito == 'balloon' ? .1045 : .1095;

      seguro_tipo   = $('#financiamiento-tipo-seguro option:selected').val();
      $('.financiamiento-tipo-poliza').text(seguro_tipo);

      plazo_credito = $('#financiamiento-plazo-credito option:selected').val();
      $('.financiamiento-plazo').text(plazo_credito);

      version = $('#financiamiento-modelo option:selected').val();
      $('.financiamiento-auto').text('Hhighlander ' + version + ' 2014');

      precio_actual = precios[version]/100;
      $('.financiamiento-precio').text(number_format(precio_actual,2));

      //total_enganche = $('#enganche_input').val() * precio_actual / 100;
      total_enganche = $('#financiamiento-enganche').val() * precio_actual / 100;
      $('.financiamiento-enganche-per').text($('#financiamiento-enganche').val());

      $('#total_enganche,.financiamiento-enganche').text(number_format(total_enganche,2));


      $('#texto_credito').text(txt_creditos[tipo_credito]);

      vida = ((precio_actual  - total_enganche  + seguros[version][seguro_tipo][plazo_credito] )*0.0122)/(1-0.0122);//
        
        //console.log("resta "+ (precio_actual  - total_enganche));
        
        //console.log("version "+ version);
        
        //console.log("seguro_tipo "+ seguro_tipo);
        //console.log("plazo_credito "+ plazo_credito);
        
         //console.log("seguros "+ seguros[version][seguro_tipo][plazo_credito]);
        
        //console.log("vida "+ vida);

      monto_diario = precio_actual - total_enganche + vida + seguros[version][seguro_tipo][plazo_credito];
        
        //console.log("monto diario "+ monto_diario);

       // console.log('precio_actual = ' + precio_actual);
       // console.log('total_enganche = '+ total_enganche);
       // console.log('vida = '+ vida);

       // console.log('seguro_tipo ' + seguro_tipo);
       // console.log('version = ' + version);
       // console.log('plazo_credito = ' + plazo_credito);
       // console.log('seguro = ' +seguros[version][seguro_tipo][plazo_credito]/100 );
       // console.log(seguros);
       // console.log('monto_diario = '+monto_diario);

      pago_final = tipo_credito == 'balloon' ? precio_actual * 0.35 : 0;

      //pago_mensual = ExcelFormulas.PMT(tasa_interes*365/360/12*1.16, plazo_credito, -monto_diario);
      pago_mensual = ExcelFormulas.PMT(tasa_interes*365/360/12*1.16, plazo_credito, -monto_diario, (pago_final != 0) ?pago_final : 0);
      //console.log('pago mensual' + pago_mensual);
      $('.financiamiento-pago-mensual').text(number_format(pago_mensual,2));
      $('.financiamiento-pago-mensual-base').text(number_format(pago_mensual,2));

      comision_apertura = monto_diario * 0.0175 *1.16*1;
      $('.financiamiento-comision-apertura').text(number_format(comision_apertura,2));

      $('.financiamiento-tasa-especial').text(tipo_credito == 'balloon' ? '10.95' : '10.95');

      // console.log(tipo_credito == 'balloon' ? '10.45' : '9.95')
      // console.log(tipo_credito);


      if(pago_final != 0) {
        $('.financiamiento-pago-final-extra').text(number_format(pago_final,2));
        $('.pago-final-toggle').show();
      }else{
        $('.pago-final-toggle').hide();
      }

      // console.log('precio_actual '+precio_actual);
      // console.log('pago_final ' + pago_final);
      //Cálculo CAT
      //tabla
      cat_capital       = [];
      cat_interes       = [];
      cat_amortizacion  = [];
      cat_pago          = [];
      cat_cashflow      = [];

      cat_capital[0]      = monto_diario;
      cat_interes[0]      = tasa_interes * 365/360/12*cat_capital[0];
      cat_pago[0]         = ExcelFormulas.PMT(tasa_interes * 365/360/12, plazo_credito, - cat_capital[0], pago_final);
      // console.log('cat_pago[0] '+cat_pago[0]);
      cat_amortizacion[0] = cat_pago[0] - cat_interes[0];
      cat_cashflow[0]     = -(monto_diario - comision_apertura);




      for (var i = 1; i < 61; i++) {
        cat_pago[i]         = (i < plazo_credito) ?
                                cat_pago[i-1] :
                                (i == plazo_credito) ? cat_pago[i-1]+ pago_final :
                                0;


        //cat_capital[i]      = (i <= plazo_credito) ? cat_capital[i-1] + cat_interes[i-1] - cat_pago[i-1] : 0;
        //cat_interes[i]      = (cat_capital[i] > 0) ? tasa_interes * 365/360/12*cat_capital[i] : 0;
        //cat_amortizacion[i] = cat_pago[i] - cat_interes[i];
        cat_cashflow[i]     = cat_pago[i];
        // console.log(i + ' = ' + cat_pago[i]);
      };

      // console.log(cat_cashflow);

      // for(i = 0; i < cat_pago.length ; i++){
      //   console.log(i+1 +' '+ cat_capital[i] + ' ' + cat_interes[i] + ' ' + cat_amortizacion[i] + ' ' + cat_pago[i]);
      // }

      cat_sin_iva = 100*(Math.pow(1+IRR(cat_cashflow, 0.0001),12)-1);
      $('.financiamiento-cat-sin-iva').text(number_format(cat_sin_iva,2));


      // console.log('PMT('+tasa_interes * 365/360/12 +', '+plazo_credito+', -'+cat_capital[0]+', '+pago_final+')');
      // console.log('cash_flow');
      // console.log(cat_cashflow);
      // console.log('cat_sin_iva = ' + cat_sin_iva);

      //paso 2
      // console.log(seguros[version]['diamante'][plazo_credito]/100);
      // console.log(seguros[version]['oro'][plazo_credito]/100);

      var reducciones = {
        'diamante'  : 0,
        'oro'       : ExcelFormulas.PMT(tasa_interes*365/360/12*1.16, plazo_credito, (seguros[version]['diamante'][plazo_credito]/100) - (seguros[version]['oro'][plazo_credito]/100),0),
        'amplia'    : ExcelFormulas.PMT(tasa_interes*365/360/12*1.16, plazo_credito, (seguros[version]['diamante'][plazo_credito]/100) - (seguros[version]['amplia'][plazo_credito]/100),0)
      };

      $('.financiamiento-reduccion-costo-mensual').text(number_format(reducciones[seguro_tipo],2));
      $('.financiamiento-poliza-diamante').text(number_format(reducciones[seguro_tipo],2));
      $('.pago_mensual_total').text(number_format(reducciones[seguro_tipo] + pago_mensual,2));

      $('#beneficios_deducibles').text(beneficios['deducibles'][seguro_tipo]);
      $('#beneficios_responsabilidad').text(number_format(beneficios['responsabilidad'][seguro_tipo],2));
      $('#beneficios_auto_sustituto').text(beneficios['auto_sustituto'][seguro_tipo]);
      $('#beneficios_excencion_deducible').text(beneficios['excencion_deducible'][seguro_tipo]);


      $('.plazo').text(plazo_credito);
      $('.amortizacion').text(tipo_credito);

      var cotizacion = {
        'auto': 'Hhighlander ' + version + ' 2014',
        'enganche': number_format(total_enganche,2),
        'enper': $('#financiamiento-enganche').val(),
        'plazo': plazo_credito,
        'comision': number_format(comision_apertura,2),
        'seguro': seguro_tipo,
        'amortizacion': tipo_credito,
        'pago_mensual': number_format(pago_mensual,2),
        'cat': number_format(100*(Math.pow(1+IRR(cat_cashflow, 0.0001),12)-1),2)
      };
      $('#cotizacion-data').val(
        JSON.stringify(cotizacion)
      );
      // $('#financiamiento-imprimir').attr('href', 'http://189.206.73.198/buroaps_2_1/preaprobado.aspx?'
      //   +'ID_MODELO= ' + modelos[version]
      //   +'&ID_AUTO=' + '3'
      //   +'&ID_PLAN=' + (tipo_credito == 'balloon' ? 18 : 1)
      //   +'&ID_ESTADO=' +  '15'
      //   +'&ID_PLAZO=' +  '17'
      //   +'&ID_PROGRAMA=' +  '1'
      //   +'&ID_ASEGURADORA=' + '5'
      //   +'&ID_COBERTURA=' +  '15'
      //   +'&ID_PERSONA=' +  '1'
      //   +'&ID_DESEMPLEO=' +  '1'
      //   +'&ID_PAGO=' +  '2'
      //   +'&MON_FINA=' +  (precio_actual - total_enganche + parseInt(seguros[version]['amplia'][plazo_credito]/100))
      //   +'&PAGO=' +  parseInt(reducciones[seguro_tipo] + pago_mensual)
      //   +'&PRECIO=' + precio_actual
      //   +'&DES_PLAZO=' +  plazo_credito
      //   +'&PAGO_FINAL=' + pago_final
      //   +'&TASA=' +  '9.95'
      //   +'&ENGANCHE=' +  total_enganche
      //   +'&SEG_VIDA=' +  parseInt(vida)
      //   +'&SEG_DANOS=' +  seguros[version][seguro_tipo][plazo_credito]/100
      //   +'&SEG_DESEMPLEO=' +  '0.00'
      //   +'&IVA=' +  '16'
      //   +'&COMISION=' + '1.75'
      //   +'&COMISION_P=' +  comision_apertura
      //   +'&DES_INI=' +  parseInt(comision_apertura + total_enganche)
      // );



      // console.log(precio_actual + ' - ' + total_enganche + ' + ' + seguros[version]['amplia'][plazo_credito]/100);
      // console.log(precio_actual - total_enganche + seguros[version]['amplia'][plazo_credito]/100);
      // console.log($('#liga_credito').attr('href'));
    }
  };

  $('#financiamiento-plazo-credito,#financiamiento-tipo-credito,#financiamiento-modelo,#enganche_input,#tipo_credito_select,#financiamiento-tipo-seguro').change(function(e){
    Cotizador.cotizar();
  });
  $('#financiamiento-enganche').on('slide', function(){
    Cotizador.cotizar();
  });


  Cotizador.cotizar();



});
