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
        console.log('ahí les voy '+i);
        dx *= 0.5;
        var x_mid = rtb + dx;
        var f_mid = this.XNPV(x_mid, values);
        if (f_mid <= 0.0) rtb = x_mid;
        if ((Math.abs(f_mid) < 1.0e-6) || (Math.abs(dx) < 1.0e-6)) return x_mid;
      };
      console.log('regreso null');
      return null;
    }

  };

  var modelos = {
    'XLE 4AT'     : 1240,
    'XRS 5AT'     : 1241,
    'XRS 5MT'     : 1242,
    'LE MT'       : 1243,
    'LE AT'       : 1244,
    'XLE AT WSR'  : 1245
  };

  var txt_creditos = {
    'estandar' : 'Con el crédito estándar, tus pagos son iguales durante toda la vida del crédito. Tendrás la tranquilidad de que tus pagos siempre serán iguales.',
    'balloon'  : 'Con el crédito Balloon 35, el 35% del valor del auto se pagará junto con tu última mensualidad, por lo que el resto de tus pagos serán más bajos que en un plan estándar.'
   }
  var precios = {
    'XLE 4AT'     : 26530000,
    'XRS 5AT'     : 28790000,
    'XRS 5MT'     : 27350000,
    'LE MT'       : 23600000,
    'LE AT'       : 24820000,
    'XLE AT WSR'  : 27300000
  };

  var seguros = {
    'XLE 4AT'     : {
      'amplia'    : {
        '12' : 1288793,
        '18' : 1897481,
        '24' : 2506169,
        '30' : 3097176,
        '36' : 3688183,
        '48' : 4835587,
        '60' : 5949635
      },
      'oro'  : {
        '12' : 1494888,
        '18' : 2203615,
        '24' : 2912342,
        '30' : 3600482,
        '36' : 4288622,
        '48' : 5624603,
        '60' : 6921746
      },
      'diamante' : {
        '12' : 1630653,
        '18' : 2405281,
        '24' : 3179908,
        '30' : 3932034,
        '36' : 4684160,
        '48' : 6144366,
        '60' : 7562123
      }
    },

    'XRS 5AT'     : {
      'amplia'    : {
        '12' : 1369888,
        '18' : 2017941,
        '24' : 2665993,
        '30' : 3295220,
        '36' : 3924448,
        '48' : 5146054,
        '60' : 6332147
      },
      'oro'  : {
        '12' : 1590320,
        '18' : 2345369,
        '24' : 3100419,
        '30' : 3833536,
        '36' : 4566653,
        '48' : 5989954,
        '60' : 7371878
      },
      'diamante' : {
        '12' : 1726085,
        '18' : 2547035,
        '24' : 3367985,
        '30' : 4165088,
        '36' : 4962190,
        '48' : 6509716,
        '60' : 8012254
      }
    },

    'XRS 5MT'     : {
      'amplia'    : {
        '12' : 1318217,
        '18' : 1941188,
        '24' : 2564158,
        '30' : 3169033,
        '36' : 3773907,
        '48' : 4948234,
        '60' : 6088422
      },
      'oro'  : {
        '12' : 1529514,
        '18' : 2255048,
        '24' : 2980583,
        '30' : 3685042,
        '36' : 4389500,
        '48' : 5757164,
        '60' : 7085068
      },
      'diamante' : {
        '12' : 1665279,
        '18' : 2456714,
        '24' : 3248148,
        '30' : 4016593,
        '36' : 4785038,
        '48' : 6276927,
        '60' : 7725445
      }
    },

    'LE MT'     : {
      'amplia'    : {
        '12' : 1183655,
        '18' : 1741310,
        '24' : 2298964,
        '30' : 2840420,
        '36' : 3381876,
        '48' : 4433079,
        '60' : 5453722
      },
      'oro'  : {
        '12' : 1371165,
        '18' : 2019837,
        '24' : 2668509,
        '30' : 3298338,
        '36' : 3928167,
        '48' : 5150941,
        '60' : 6338168
      },
      'diamante' : {
        '12' : 1506930,
        '18' : 2221502,
        '24' : 2936074,
        '30' : 3629889,
        '36' : 4323704,
        '48' : 5670704,
        '60' : 6978544
      }
    },

    'LE AT'     : {
      'amplia'    : {
        '12' : 1227433,
        '18' : 1806337,
        '24' : 2385241,
        '30' : 2947329,
        '36' : 3509417,
        '48' : 4600676,
        '60' : 5660211
      },
      'oro'  : {
        '12' : 1422681,
        '18' : 2096359,
        '24' : 2770037,
        '30' : 3424145,
        '36' : 4078254,
        '48' : 5348166,
        '60' : 6581160
      },
      'diamante' : {
        '12' : 1558446,
        '18' : 2298024,
        '24' : 3037602,
        '30' : 3755697,
        '36' : 4473792,
        '48' : 5867928,
        '60' : 7221536
      }
    },

    'XLE AT WSR'     : {
      'amplia'    : {
        '12' : 1316423,
        '18' : 1938523,
        '24' : 2560622,
        '30' : 3164651,
        '36' : 3768680,
        '48' : 4941366,
        '60' : 6079960
      },
      'oro'  : {
        '12' : 1527403,
        '18' : 2251912,
        '24' : 2976422,
        '30' : 3679885,
        '36' : 4383349,
        '48' : 5749081,
        '60' : 7075110
      },
      'diamante' : {
        '12' : 1663168,
        '18' : 2453577,
        '24' : 3243987,
        '30' : 4011437,
        '36' : 4778887,
        '48' : 6268844,
        '60' : 7715486
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

  var modelos = {
    'XLE 4AT'     : 1240,
    'XRS 5AT'     : 1241,
    'XRS 5MT'     : 1242,
    'LE MT'       : 1243,
    'LE AT'       : 1244,
    'XLE AT WSR'  : 1245
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
  }

  var precio_actual = 0;

  var Cotizador = {
    cotizar:function(){
      seguro_tipo   = $('#seguro_tipo_select option:selected').val();
      $('.poliza_tipo').text(seguro_tipo);

      plazo_credito = $('#plazo_credito_select option:selected').val();

      version = $('#version_select option:selected').val();
      $('.auto').text('Corolla ' + version + ' 2014');

      precio_actual = precios[version]/100;
      $('#precio').text(precio_actual);

      total_enganche = $('#enganche_input').val() * precio_actual / 100;
      $('#total_enganche,.enganche').text(total_enganche);

      tipo_credito = $('#tipo_credito_select option:selected').val();

      $('#texto_credito').text(txt_creditos[tipo_credito]);

      vida = ((precio_actual  - total_enganche  + seguros[version][seguro_tipo][plazo_credito]/100 )*0.0122)/(1-0.0122);//

      monto_diario = precio_actual - total_enganche + vida + seguros[version]['diamante'][plazo_credito]/100;

      // console.log('precio_actual = ' + precio_actual);
      // console.log('total_enganche = '+ total_enganche);
      // console.log('vida = '+ vida);
      // console.log('seguro = ' +seguros[version]['diamante'][plazo_credito]/100 );
      // console.log('monto_diario = '+monto_diario);

      pago_mensual = ExcelFormulas.PMT(0.0995*365/360/12*1.16, plazo_credito, -monto_diario);

      $('#pago_mensual').text(pago_mensual);
      $('#pago_mensual_base').text(pago_mensual);

      comision_apertura = monto_diario * 0.0175 *1.16;
      $('#comision_apertura').text(comision_apertura);

      pago_final = tipo_credito == 'balloon' ? precio_actual * 0.35 : 0;

      //Cálculo CAT
      //tabla
      cat_capital       = [];
      cat_interes       = [];
      cat_amortizacion  = [];
      cat_pago          = [];
      cat_cashflow      = [];

      cat_capital[0]      = monto_diario;
      cat_interes[0]      = 0.0995 * 365/360/12*cat_capital[0];
      cat_pago[0]         = ExcelFormulas.PMT(0.0995*365/360/12, plazo_credito, -cat_capital[0], pago_final);
      cat_amortizacion[0] = cat_pago[0] - cat_interes[0];
      cat_cashflow[0]     = -(monto_diario - comision_apertura);




      for (var i = 1; i < 61; i++) {
        cat_pago[i]         = (i-1 < plazo_credito) ?  cat_pago[i-1] + pago_final : 0;
        cat_capital[i]      = (i <= plazo_credito) ? cat_capital[i-1] + cat_interes[i-1] - cat_pago[i-1] : 0;
        cat_interes[i]      = (cat_capital[i] > 0) ? 0.0995*365/360/12*cat_capital[i] : 0;
        cat_amortizacion[i] = cat_pago[i] - cat_interes[i];
        cat_cashflow[i]     = cat_pago[i];
      };


      // for(i = 0; i < cat_pago.length ; i++){
      //   console.log(i+1 +' '+ cat_capital[i] + ' ' + cat_interes[i] + ' ' + cat_amortizacion[i] + ' ' + cat_pago[i]);
      // }


      $('.cat_sin_iva').text(100*(Math.pow(1+IRR(cat_cashflow, 0.0001),12)-1));


      //paso 2
      // console.log(seguros[version]['diamante'][plazo_credito]/100);
      // console.log(seguros[version]['oro'][plazo_credito]/100);

      var reducciones = {
        'diamante'  : 0,
        'oro'       : ExcelFormulas.PMT(0.0995*365/360/12*1.16, plazo_credito, (seguros[version]['diamante'][plazo_credito]/100) - (seguros[version]['oro'][plazo_credito]/100),0),
        'amplia'    : ExcelFormulas.PMT(0.0995*365/360/12*1.16, plazo_credito, (seguros[version]['diamante'][plazo_credito]/100) - (seguros[version]['amplia'][plazo_credito]/100),0)
      };

      $('.reduccion_costo_mensual').text(reducciones[seguro_tipo]);
      $('.pago_mensual_total').text(reducciones[seguro_tipo] + pago_mensual);

      $('#beneficios_deducibles').text(beneficios['deducibles'][seguro_tipo]);
      $('#beneficios_responsabilidad').text(beneficios['responsabilidad'][seguro_tipo]);
      $('#beneficios_auto_sustituto').text(beneficios['auto_sustituto'][seguro_tipo]);
      $('#beneficios_excencion_deducible').text(beneficios['excencion_deducible'][seguro_tipo]);


      $('.plazo').text(plazo_credito);
      $('.amortizacion').text(tipo_credito);
      $('#liga_credito').attr('href', 'http://189.206.73.198/buroaps_2_1/preaprobado.aspx?'
        +'ID_MODELO= ' + modelos[version]
        +'&ID_AUTO=' + '3'
        +'&ID_PLAN=' + (tipo_credito == 'balloon' ? 18 : 1)
        +'&ID_ESTADO=' +  '15'
        +'&ID_PLAZO=' +  '17'
        +'&ID_PROGRAMA=' +  '1'
        +'&ID_ASEGURADORA=' + '5'
        +'&ID_COBERTURA=' +  '15'
        +'&ID_PERSONA=' +  '1'
        +'&ID_DESEMPLEO=' +  '1'
        +'&ID_PAGO=' +  '2'
        +'&MON_FINA=' +  (precio_actual - total_enganche + parseInt(seguros[version]['amplia'][plazo_credito]/100))
        +'&PAGO=' +  parseInt(reducciones[seguro_tipo] + pago_mensual)
        +'&PRECIO=' + precio_actual
        +'&DES_PLAZO=' +  plazo_credito
        +'&PAGO_FINAL=' + pago_final
        +'&TASA=' +  '9.95'
        +'&ENGANCHE=' +  total_enganche
        +'&SEG_VIDA=' +  parseInt(vida)
        +'&SEG_DANOS=' +  seguros[version][seguro_tipo][plazo_credito]/100
        +'&SEG_DESEMPLEO=' +  '0.00'
        +'&IVA=' +  '16'
        +'&COMISION=' + '1.75'
        +'&COMISION_P=' +  comision_apertura
        +'&DES_INI=' +  parseInt(comision_apertura + total_enganche)
        );
      // console.log(precio_actual + ' - ' + total_enganche + ' + ' + seguros[version]['amplia'][plazo_credito]/100);
      // console.log(precio_actual - total_enganche + seguros[version]['amplia'][plazo_credito]/100);
      // console.log($('#liga_credito').attr('href'));
    }
  };

  $('#version_select,#enganche_input,#tipo_credito_select,#seguro_tipo_select').change(function(e){
    Cotizador.cotizar();
  });
  Cotizador.cotizar();



});
