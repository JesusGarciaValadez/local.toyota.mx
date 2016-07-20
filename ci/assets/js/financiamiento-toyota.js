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
    'LE'     : 1497,
    'XSE'     : 1655,
    'XLE'          : 1499,
    'XLE 4 CIL'        : 1500,
    'XLE NAVI'        : 1654
  };

  var txt_creditos = {
    'estandar' : 'Con el crédito estándar, tus pagos son iguales durante toda la vida del crédito. Tendrás la tranquilidad de que tus pagos siempre serán iguales.',
    'balloon'  : 'Con el crédito Balloon 35, el 35% del valor del auto se pagará junto con tu última mensualidad, por lo que el resto de tus pagos serán más bajos que en un plan estándar.'
  };

  var precios = {
    'LE'    : 32660000,
    'XSE'   : 42610000,
    'XLE'        : 44670000,
    'XLE 4 CIL'      : 36000000,
    'XLE NAVI'      : 39020000
  };

  var seguros = {
    'LE'     : {
      'amplia'    : {
        '12' : 1921764,
        '18' : 2832386,
        '24' : 3743008,
        '30' : 4627178,
        '36' : 5511348,
        '48' : 7227910,
        '60' : 8894570
      },
      'oro'  : {
        '12' : 2096420,
        '18' : 3091820,
        '24' : 4087220,
        '30' : 5053705,
        '36' : 6020191,
        '48' : 7896563,
        '60' : 9718387
      },
      'diamante' : {
        '12' : 2171671,
        '18' : 3203597,
        '24' : 4235523,
        '30' : 5237474,
        '36' : 6239425,
        '48' : 8184651,
        '60' : 1007332
      }
    },

    'XSE'     : {
      'amplia'    : {
        '12' : 2337338,
        '18' : 3449680,
        '24' : 4562021,
        '30' : 5642051,
        '36' : 6722081,
        '48' : 8818893,
        '60' : 1085474
      },
      'oro'  : {
        '12' : 2550672,
        '18' : 3766566,
        '24' : 4982460,
        '30' : 6163034,
        '36' : 7343608,
        '48' : 9635620,
        '60' : 1186100
      },
      'diamante' : {
        '12' : 2625922,
        '18' : 3878343,
        '24' : 5130763,
        '30' : 6346802,
        '36' : 7562842,
        '48' : 9923708,
        '60' : 1221594
      }
    },

    'XLE'     : {
      'amplia'    : {
        '12' : 2423377,
        '18' : 3577481,
        '24' : 4731586,
        '30' : 5852166,
        '36' : 6972746,
        '48' : 9148283,
        '60' : 1126057
      },
      'oro'  : {
        '12' : 2644718,
        '18' : 3906262,
        '24' : 5167806,
        '30' : 6392704,
        '36' : 7617602,
        '48' : 9995667,
        '60' : 1230459
      },
      'diamante' : {
        '12' : 2719968,
        '18' : 4018039,
        '24' : 5316109,
        '30' : 6576472,
        '36' : 7836836,
        '48' : 1028375,
        '60' : 1265953
      }
    },

    'XLE 4 CIL'     : {
      'amplia'    : {
        '12' : 2061264,
        '18' : 3039598,
        '24' : 4017933,
        '30' : 4967849,
        '36' : 5917765,
        '48' : 7761969,
        '60' : 9552559
      },
      'oro'  : {
        '12' : 2248903,
        '18' : 3318318,
        '24' : 4387733,
        '30' : 5426083,
        '36' : 6464433,
        '48' : 8480327,
        '60' : 1043761
      },
      'diamante' : {
        '12' : 2324153,
        '18' : 3430094,
        '24' : 4536036,
        '30' : 5609852,
        '36' : 6683667,
        '48' : 8768415,
        '60' : 1079255
      }
    },

    'XLE NAVI'     : {
      'amplia'    : {
        '12' : 2187398,
        '18' : 3226958,
        '24' : 4266518,
        '30' : 5275881,
        '36' : 6285244,
        '48' : 8244860,
        '60' : 1014750
      },
      'oro'  : {
        '12' : 2386776,
        '18' : 3523115,
        '24' : 4659454,
        '30' : 5762784,
        '36' : 6866114,
        '48' : 9008161,
        '60' : 1108793
      },
      'diamante' : {
        '12' : 2462026,
        '18' : 3634892,
        '24' : 4807757,
        '30' : 5946552,
        '36' : 7085348,
        '48' : 9296249,
        '60' : 1144287
      }
    }
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
      //tasa_interes = tipo_credito == 'balloon' ? .1045 : .0995;
      tasa_interes = .0895;

      seguro_tipo   = $('#financiamiento-tipo-seguro option:selected').val();
      $('.financiamiento-tipo-poliza').text(seguro_tipo);

      plazo_credito = $('#financiamiento-plazo-credito option:selected').val();
      $('.financiamiento-plazo').text(plazo_credito);

      version = $('#financiamiento-modelo option:selected').val();
      $('.financiamiento-auto').text('Camry ' + version + ' 2015    ');

      precio_actual = precios[version]/100;
      $('.financiamiento-precio').text(number_format(precio_actual,2));

      //total_enganche = $('#enganche_input').val() * precio_actual / 100;
      total_enganche = $('#financiamiento-enganche').val() * precio_actual / 100;
      $('.financiamiento-enganche-per').text($('#financiamiento-enganche').val());

      $('#total_enganche,.financiamiento-enganche').text(number_format(total_enganche,2));


      $('#texto_credito').text(txt_creditos[tipo_credito]);
        
    vida = ((precio_actual  - total_enganche  + seguros[version][seguro_tipo][plazo_credito]/100 )*0.0122)/(1-0.0122);//
        
        

      monto_diario = precio_actual - total_enganche + vida + seguros[version][seguro_tipo][plazo_credito]/100;
        
        //$('.simon').text(monto_diario);

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
        
       // PMT(B5*365/360/12*1.16,E8,-Variables!D29,IF(B9<>"",B9,0))
        
        //$('.simon').text(tasa_interes);
        
      pago_mensual = ExcelFormulas.PMT(tasa_interes*365/360/12*1.16, plazo_credito, -monto_diario, (pago_final != 0) ?pago_final : 0);
      //console.log('pago mensual' + pago_mensual);
      $('.financiamiento-pago-mensual').text(number_format(pago_mensual,2));
      $('.financiamiento-pago-mensual-base').text(number_format(pago_mensual,2));

      //comision_apertura = monto_diario * 0.0175 *1.16;
        comision_apertura =0;
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
        'auto': 'Camry ' + version + ' 2015',
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
  $('#financiamiento-enganche').on('change', function(){
    Cotizador.cotizar();
  });


  Cotizador.cotizar();



});
