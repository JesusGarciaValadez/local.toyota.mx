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
    'LE'     : 1623,
    'XLE'     : 1624,
    'Limited Blu-Ray'          : 1625,
    'LTD Panorama Roof'        : 1626
  };

  var txt_creditos = {
    'estandar' : 'Con el crédito estándar, tus pagos son iguales durante toda la vida del crédito. Tendrás la tranquilidad de que tus pagos siempre serán iguales.',
    'balloon'  : 'Con el crédito Balloon 35, el 35% del valor del auto se pagará junto con tu última mensualidad, por lo que el resto de tus pagos serán más bajos que en un plan estándar.'
  };

  var precios = {
    'LE'   : 47910000,
    'XLE'   : 54030000,
    'Limited Blu-Ray'        : 62730000,
    'LTD Panorama Roof'      : 60710000
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
        '12' : 26229.38167,
        '18' : 38739.09614,
        '24' : 51248.81061,
        '30' : 63395.14029,
        '36' : 75541.46997,
        '48' : 99122.82295,
        '60' : 122018.6415
      },
      'oro'  : {
        '12' : 28768.30694,
        '18' : 42510.41573,
        '24' : 56252.52453,
        '30' : 69595.44969,
        '36' : 82938.37485,
        '48' : 108842.8445,
        '60' : 133994.2442
      },
      'diamante' : {
        '12' : 29569.4779,
        '18' : 43700.47508,
        '24' : 57831.47226,
        '30' : 71551.9893,
        '36' : 85272.50634,
        '48' : 111910.0474,
        '60' : 137773.2074
      }
    },

    'XLE'     : {
      'amplia'    : {
        '12' : 28888.51485,
        '18' : 42688.97256,
        '24' : 56489.43027,
        '30' : 69889.00942,
        '36' : 83288.58857,
        '48' : 109303.0484,
        '60' : 134561.2409
      },
      'oro'  : {
        '12' : 31678.60104,
        '18' : 46833.36659,
        '24' : 61988.13214,
        '30' : 76702.67891,
        '36' : 91417.22568,
        '48' : 119984.6144,
        '60' : 147721.5194
      },
      'diamante' : {
        '12' : 32479.772,
        '18' : 48023.42594,
        '24' : 63567.07987,
        '30' : 78659.21852,
        '36' : 93751.35716,
        '48' : 123051.8173,
        '60' : 151500.4826
      }
    },

    'Limited Blu-Ray'     : {
      'amplia'    : {
        '12' : 32664.74681,
        '18' : 48298.18751,
        '24' : 63931.62821,
        '30' : 79110.94548,
        '36' : 94290.26275,
        '48' : 123759.9748,
        '60' : 152372.9718
      },
      'oro'  : {
        '12' : 35811.50633,
        '18' : 52972.38411,
        '24' : 70133.26189,
        '30' : 86795.64692,
        '36' : 103458.032,
        '48' : 135807.029,
        '60' : 167215.6071
      },
      'diamante' : {
        '12' : 36612.6773,
        '18' : 54162.44346,
        '24' : 71712.20962,
        '30' : 88752.18653,
        '36' : 105792.1634,
        '48' : 138874.2319,
        '60' : 170994.5703
      }
    },

    'LTD Panorama Roof'     : {
      'amplia'    : {
        '12' : 31788.5909,
        '18' : 46996.74552,
        '24' : 62204.90015,
        '30' : 76971.28514,
        '36' : 91737.67013,
        '48' : 120405.6996,
        '60' : 148240.3196
      },
      'oro'  : {
        '12' : 34852.59559,
        '18' : 51548.0181,
        '24' : 68243.4406,
        '30' : 84453.891,
        '36' : 100664.3414,
        '48' : 132135.9351,
        '60' : 162692.6169
      },
      'diamante' : {
        '12' : 35653.76656,
        '18' : 52738.07744,
        '24' : 69822.38833,
        '30' : 86410.43061,
        '36' : 102998.4729,
        '48' : 135203.138,
        '60' : 166471.5801

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
      $('.financiamiento-auto').text('Highlander ' + version + ' 2015');

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
        'auto': 'Highlander ' + version + ' 2015',
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
