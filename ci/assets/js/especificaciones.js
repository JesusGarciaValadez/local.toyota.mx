$( document ).ready(function() {

var url = 'http://'+document.location.hostname+'/';
var camioneta = $('.especificaciones').data('modelo');

	if(camioneta == ''){
		camioneta = 'le'
	}

	data = {}

	$.ajax({
		type: "GET",
		encoding:"UTF-8",
		url: url+"/assets/especificaciones.json",
		async: false,
		dataType: "json",
		success: function(data){
			especific = data
		} 
	});

// reset gral
function resetespecif(){
	$('.jsn-Capacidad p, .jsn-Potencia p, .jsn-Cilindros p, .jsn-Valvulas p').html('');
	$('.jsn-UrlMotor, .jsn-UrlInterior').removeAttr('src');
	$('.jsn-Frenos dd,.jsn-Rines dd, .jsn-Faros dd, .jsn-SeguridadExterior dd, .jsn-VisibilidadCristales dd, .jsn-VisibilidadEspejosLaterales dd, .jsn-Techo dd, .jsn-AcabadosInteriores dd, .jsn-Asientos dd, .jsn-SistemaAudio dd, .jsn-CinturonesSeguridad dd, .jsn-Confort dd, .jsn-SeguridadInterior dd ').remove();
	$('.scroll-Interno').scrollTop(0)
}

//Funcion que rellena los datos
function especificacion(model){
	var modelo = model
	var i = 0;
	var j = 0;
	var k = 0;
	var l = 0;
	var m = 0;
	var n = 0;
	var o = 0;
	var p = 0;
	var q = 0;
	var r = 0;
	var s = 0;
	var t = 0;
	var u = 0;

	resetespecif();

	// Modelo coremt
	if(modelo == "le"){

		$('.cont-retic h1 span').html(especific[0].le[0].ModeloAuto)
		// - Motor
		var cantFrenos = (especific[0].le[0].EspecificacionTecnica[0].Frenos).length-1
		var cantRines = (especific[0].le[0].EspecificacionTecnica[0].Rines).length-1

		//- Exterior
		var cantFaros = (especific[0].le[0].Exterior[0].Faros).length-1
		var cantSeguridadExterior = (especific[0].le[0].Exterior[0].SeguridadExterior).length-1
		var cantVisibilidadCris = (especific[0].le[0].Exterior[0].Visibilidad[0].Cristales).length-1
		var cantVisibilidadEsp = (especific[0].le[0].Exterior[0].Visibilidad[0].EspejosLaterales).length-1
		var cantTecho = (especific[0].le[0].Exterior[0].Techo).length-1

		//- Interior
		var cantAcabadosInteriores = (especific[0].le[0].Interior[0].AcabadosInteriores).length-1
		var cantAsientos= (especific[0].le[0].Interior[0].Asientos).length-1
		var cantSistemaAudio = (especific[0].le[0].Interior[0].SistemaAudio).length-1
		var cantCinturonesSeguridad = (especific[0].le[0].Interior[0].CinturonesSeguridad).length-1
		var cantConfort = (especific[0].le[0].Interior[0].Confort).length-1
		var cantSeguridadInterior = (especific[0].le[0].Interior[0].SeguridadInterior).length-1

		//MOTOR
		$('.jsn-UrlMotor').attr('src', url+'assets/images/datos/'+especific[0].le[0].EspecificacionTecnica[0].UrlMotor);
		$('.jsn-Capacidad p').html(especific[0].le[0].EspecificacionTecnica[0].Motor[0].Capacidad);
		$('.jsn-Potencia p').html(especific[0].le[0].EspecificacionTecnica[0].Motor[0].Potencia);
		$('.jsn-Cilindros p').html(especific[0].le[0].EspecificacionTecnica[0].Motor[0].Cilindros);
		$('.jsn-Valvulas p').html(especific[0].le[0].EspecificacionTecnica[0].Motor[0].Valvulas);
		//$('.jsn-Traccion p').html(especific[0].le[0].EspecificacionTecnica[0].Motor[0].Traccion);
		//Frenos
		while(i<= cantFrenos){
			$('.jsn-Frenos dl').append('<dd><p>'+especific[0].le[0].EspecificacionTecnica[0].Frenos[i]+'</p></dd>');
			i++
		}
		//Rines
		while(j<= cantRines){
			$('.jsn-Rines dl').append('<dd><p>'+especific[0].le[0].EspecificacionTecnica[0].Rines[j]+'</p></dd>');
			j++
		}
		$('.jsn-UrlAuto').attr('src', url+'assets/images/datos/'+especific[0].le[0].EspecificacionTecnica[0].UrlAuto);
		// EXTERIOR
		//Faros
		while(k<= cantFaros){
			$('.jsn-Faros dl').append('<dd><p>'+especific[0].le[0].Exterior[0].Faros[k]+'</p></dd>');
			k++
		}
		//Seguridad exterior
		while(l<= cantSeguridadExterior){
			$('.jsn-SeguridadExterior dl').append('<dd><p>'+especific[0].le[0].Exterior[0].SeguridadExterior[l]+'</p></dd>');
			l++
		}
		//Visibilidad
		while(m<= cantVisibilidadCris){
			$('.jsn-VisibilidadCristales dl ').append('<dd><p>'+especific[0].le[0].Exterior[0].Visibilidad[0].Cristales[m]+'</p></dd>');
			m++
		}
		while(n<= cantVisibilidadEsp){
			$('.jsn-VisibilidadEspejosLaterales dl ').append('<dd><p>'+especific[0].le[0].Exterior[0].Visibilidad[0].EspejosLaterales[n]+'</p></dd>');
			n++
		}
		//Techo
		while(o<= cantTecho){
			$('.jsn-Techo dl').append('<dd><p>'+especific[0].le[0].Exterior[0].Techo[o]+'</p></dd>');
			o++
		}
		$('.jsn-UrlInterior').attr('src', url+'assets/images/datos/'+especific[0].le[0].Exterior[0].UrlInterior);
		// INTERIOR
		//AcabadosInteriores
		while(p<= cantAcabadosInteriores){
			$('.jsn-AcabadosInteriores dl').append('<dd><p>'+especific[0].le[0].Interior[0].AcabadosInteriores[p]+'</p></dd>');
			p++
		}
		//Asientos
		while(q<= cantAsientos){
			$('.jsn-Asientos dl').append('<dd><p>'+especific[0].le[0].Interior[0].Asientos[q]+'</p></dd>');
			q++
		}
		//SistemaAudio
		while(r<= cantSistemaAudio){
			$('.jsn-SistemaAudio dl ').append('<dd><p>'+especific[0].le[0].Interior[0].SistemaAudio[r]+'</p></dd>');
			r++
		}
		//CinturonesSeguridad
		while(s<= cantCinturonesSeguridad){
			$('.jsn-CinturonesSeguridad dl ').append('<dd><p>'+especific[0].le[0].Interior[0].CinturonesSeguridad[s]+'</p></dd>');
			s++
		}
		//Confort
		while(t<= cantConfort){
			$('.jsn-Confort dl').append('<dd><p>'+especific[0].le[0].Interior[0].Confort[t]+'</p></dd>');
			t++
		}
		//SeguridadInterior
		while(u<= cantSeguridadInterior){
			$('.jsn-SeguridadInterior dl').append('<dd><p>'+especific[0].le[0].Interior[0].SeguridadInterior[u]+'</p></dd>');
			u++
		}
		$('.jsn-Download').attr('href', url+'downloads/'+especific[0].le[0].Interior[0].Download);

	}
	// Modelo limited
	else if(modelo === "xle"){

		$('.cont-retic h1 span').html(especific[0].xle[0].ModeloAuto)
		// - Motor
		var cantFrenos = (especific[0].xle[0].EspecificacionTecnica[0].Frenos).length-1
		var cantRines = (especific[0].xle[0].EspecificacionTecnica[0].Rines).length-1

		//- Exterior
		var cantFaros = (especific[0].xle[0].Exterior[0].Faros).length-1
		var cantSeguridadExterior = (especific[0].xle[0].Exterior[0].SeguridadExterior).length-1
		var cantVisibilidadCris = (especific[0].xle[0].Exterior[0].Visibilidad[0].Cristales).length-1
		var cantVisibilidadEsp = (especific[0].xle[0].Exterior[0].Visibilidad[0].EspejosLaterales).length-1
		var cantTecho = (especific[0].xle[0].Exterior[0].Techo).length-1

		//- Interior
		var cantAcabadosInteriores = (especific[0].xle[0].Interior[0].AcabadosInteriores).length-1
		var cantAsientos= (especific[0].xle[0].Interior[0].Asientos).length-1
		var cantSistemaAudio = (especific[0].xle[0].Interior[0].SistemaAudio).length-1
		var cantCinturonesSeguridad = (especific[0].xle[0].Interior[0].CinturonesSeguridad).length-1
		var cantConfort = (especific[0].xle[0].Interior[0].Confort).length-1
		var cantSeguridadInterior = (especific[0].xle[0].Interior[0].SeguridadInterior).length-1

		//MOTOR
		$('.jsn-UrlMotor').attr('src', url+'assets/images/datos/'+especific[0].xle[0].EspecificacionTecnica[0].UrlMotor);
		$('.jsn-Capacidad p').html(especific[0].xle[0].EspecificacionTecnica[0].Motor[0].Capacidad);
		$('.jsn-Potencia p').html(especific[0].xle[0].EspecificacionTecnica[0].Motor[0].Potencia);
		$('.jsn-Cilindros p').html(especific[0].xle[0].EspecificacionTecnica[0].Motor[0].Cilindros);
		$('.jsn-Valvulas p').html(especific[0].xle[0].EspecificacionTecnica[0].Motor[0].Valvulas);
		//$('.jsn-Traccion p').html(especific[0].xle[0].EspecificacionTecnica[0].Motor[0].Traccion);
		//Frenos
		while(i<= cantFrenos){
			$('.jsn-Frenos dl').append('<dd><p>'+especific[0].xle[0].EspecificacionTecnica[0].Frenos[i]+'</p></dd>');
			i++
		}
		//Rines
		while(j<= cantRines){
			$('.jsn-Rines dl').append('<dd><p>'+especific[0].xle[0].EspecificacionTecnica[0].Rines[j]+'</p></dd>');
			j++
		}
		$('.jsn-UrlAuto').attr('src', url+'assets/images/datos/'+especific[0].xle[0].EspecificacionTecnica[0].UrlAuto);
		// EXTERIOR
		//Faros
		while(k<= cantFaros){
			$('.jsn-Faros dl').append('<dd><p>'+especific[0].xle[0].Exterior[0].Faros[k]+'</p></dd>');
			k++
		}
		//Seguridad exterior
		while(l<= cantSeguridadExterior){
			$('.jsn-SeguridadExterior dl').append('<dd><p>'+especific[0].xle[0].Exterior[0].SeguridadExterior[l]+'</p></dd>');
			l++
		}
		//Visibilidad
		while(m<= cantVisibilidadCris){
			$('.jsn-VisibilidadCristales dl ').append('<dd><p>'+especific[0].xle[0].Exterior[0].Visibilidad[0].Cristales[m]+'</p></dd>');
			m++
		}
		while(n<= cantVisibilidadEsp){
			$('.jsn-VisibilidadEspejosLaterales dl ').append('<dd><p>'+especific[0].xle[0].Exterior[0].Visibilidad[0].EspejosLaterales[n]+'</p></dd>');
			n++
		}
		//Techo
		while(o<= cantTecho){
			$('.jsn-Techo dl').append('<dd><p>'+especific[0].xle[0].Exterior[0].Techo[o]+'</p></dd>');
			o++
		}
		$('.jsn-UrlInterior').attr('src', url+'assets/images/datos/'+especific[0].xle[0].Exterior[0].UrlInterior);
		// INTERIOR
		//AcabadosInteriores
		while(p<= cantAcabadosInteriores){
			$('.jsn-AcabadosInteriores dl').append('<dd><p>'+especific[0].xle[0].Interior[0].AcabadosInteriores[p]+'</p></dd>');
			p++
		}
		//Asientos
		while(q<= cantAsientos){
			$('.jsn-Asientos dl').append('<dd><p>'+especific[0].xle[0].Interior[0].Asientos[q]+'</p></dd>');
			q++
		}
		//SistemaAudio
		while(r<= cantSistemaAudio){
			$('.jsn-SistemaAudio dl ').append('<dd><p>'+especific[0].xle[0].Interior[0].SistemaAudio[r]+'</p></dd>');
			r++
		}
		//CinturonesSeguridad
		while(s<= cantCinturonesSeguridad){
			$('.jsn-CinturonesSeguridad dl ').append('<dd><p>'+especific[0].xle[0].Interior[0].CinturonesSeguridad[s]+'</p></dd>');
			s++
		}
		//Confort
		while(t<= cantConfort){
			$('.jsn-Confort dl').append('<dd><p>'+especific[0].xle[0].Interior[0].Confort[t]+'</p></dd>');
			t++
		}
		//SeguridadInterior
		while(u<= cantSeguridadInterior){
			$('.jsn-SeguridadInterior dl').append('<dd><p>'+especific[0].xle[0].Interior[0].SeguridadInterior[u]+'</p></dd>');
			u++
		}
		$('.jsn-Download').attr('href', url+'downloads/'+especific[0].xle[0].Interior[0].Download);

	}
	else if(modelo === "limitedpr"){

		$('.cont-retic h1 span').html(especific[0].limitedpr[0].ModeloAuto)
		// - Motor
		var cantFrenos = (especific[0].limitedpr[0].EspecificacionTecnica[0].Frenos).length-1
		var cantRines = (especific[0].limitedpr[0].EspecificacionTecnica[0].Rines).length-1

		//- Exterior
		var cantFaros = (especific[0].limitedpr[0].Exterior[0].Faros).length-1
		var cantSeguridadExterior = (especific[0].limitedpr[0].Exterior[0].SeguridadExterior).length-1
		var cantVisibilidadCris = (especific[0].limitedpr[0].Exterior[0].Visibilidad[0].Cristales).length-1
		var cantVisibilidadEsp = (especific[0].limitedpr[0].Exterior[0].Visibilidad[0].EspejosLaterales).length-1
		var cantTecho = (especific[0].limitedpr[0].Exterior[0].Techo).length-1

		//- Interior
		var cantAcabadosInteriores = (especific[0].limitedpr[0].Interior[0].AcabadosInteriores).length-1
		var cantAsientos= (especific[0].limitedpr[0].Interior[0].Asientos).length-1
		var cantSistemaAudio = (especific[0].limitedpr[0].Interior[0].SistemaAudio).length-1
		var cantCinturonesSeguridad = (especific[0].limitedpr[0].Interior[0].CinturonesSeguridad).length-1
		var cantConfort = (especific[0].limitedpr[0].Interior[0].Confort).length-1
		var cantSeguridadInterior = (especific[0].limitedpr[0].Interior[0].SeguridadInterior).length-1

		//MOTOR
		$('.jsn-UrlMotor').attr('src', url+'assets/images/datos/'+especific[0].limitedpr[0].EspecificacionTecnica[0].UrlMotor);
		$('.jsn-Capacidad p').html(especific[0].limitedpr[0].EspecificacionTecnica[0].Motor[0].Capacidad);
		$('.jsn-Potencia p').html(especific[0].limitedpr[0].EspecificacionTecnica[0].Motor[0].Potencia);
		$('.jsn-Cilindros p').html(especific[0].limitedpr[0].EspecificacionTecnica[0].Motor[0].Cilindros);
		$('.jsn-Valvulas p').html(especific[0].limitedpr[0].EspecificacionTecnica[0].Motor[0].Valvulas);
		//$('.jsn-Traccion p').html(especific[0].limitedpr[0].EspecificacionTecnica[0].Motor[0].Traccion);
		//Frenos
		while(i<= cantFrenos){
			$('.jsn-Frenos dl').append('<dd><p>'+especific[0].limitedpr[0].EspecificacionTecnica[0].Frenos[i]+'</p></dd>');
			i++
		}
		//Rines
		while(j<= cantRines){
			$('.jsn-Rines dl').append('<dd><p>'+especific[0].limitedpr[0].EspecificacionTecnica[0].Rines[j]+'</p></dd>');
			j++
		}
		$('.jsn-UrlAuto').attr('src', url+'assets/images/datos/'+especific[0].limitedpr[0].EspecificacionTecnica[0].UrlAuto);
		// EXTERIOR
		//Faros
		while(k<= cantFaros){
			$('.jsn-Faros dl').append('<dd><p>'+especific[0].limitedpr[0].Exterior[0].Faros[k]+'</p></dd>');
			k++
		}
		//Seguridad exterior
		while(l<= cantSeguridadExterior){
			$('.jsn-SeguridadExterior dl').append('<dd><p>'+especific[0].limitedpr[0].Exterior[0].SeguridadExterior[l]+'</p></dd>');
			l++
		}
		//Visibilidad
		while(m<= cantVisibilidadCris){
			$('.jsn-VisibilidadCristales dl ').append('<dd><p>'+especific[0].limitedpr[0].Exterior[0].Visibilidad[0].Cristales[m]+'</p></dd>');
			m++
		}
		while(n<= cantVisibilidadEsp){
			$('.jsn-VisibilidadEspejosLaterales dl ').append('<dd><p>'+especific[0].limitedpr[0].Exterior[0].Visibilidad[0].EspejosLaterales[n]+'</p></dd>');
			n++
		}
		//Techo
		while(o<= cantTecho){
			$('.jsn-Techo dl').append('<dd><p>'+especific[0].limitedpr[0].Exterior[0].Techo[o]+'</p></dd>');
			o++
		}
		$('.jsn-UrlInterior').attr('src', url+'assets/images/datos/'+especific[0].limitedpr[0].Exterior[0].UrlInterior);
		// INTERIOR
		//AcabadosInteriores
		while(p<= cantAcabadosInteriores){
			$('.jsn-AcabadosInteriores dl').append('<dd><p>'+especific[0].limitedpr[0].Interior[0].AcabadosInteriores[p]+'</p></dd>');
			p++
		}
		//Asientos
		while(q<= cantAsientos){
			$('.jsn-Asientos dl').append('<dd><p>'+especific[0].limitedpr[0].Interior[0].Asientos[q]+'</p></dd>');
			q++
		}
		//SistemaAudio
		while(r<= cantSistemaAudio){
			$('.jsn-SistemaAudio dl ').append('<dd><p>'+especific[0].limitedpr[0].Interior[0].SistemaAudio[r]+'</p></dd>');
			r++
		}
		//CinturonesSeguridad
		while(s<= cantCinturonesSeguridad){
			$('.jsn-CinturonesSeguridad dl ').append('<dd><p>'+especific[0].limitedpr[0].Interior[0].CinturonesSeguridad[s]+'</p></dd>');
			s++
		}
		//Confort
		while(t<= cantConfort){
			$('.jsn-Confort dl').append('<dd><p>'+especific[0].limitedpr[0].Interior[0].Confort[t]+'</p></dd>');
			t++
		}
		//SeguridadInterior
		while(u<= cantSeguridadInterior){
			$('.jsn-SeguridadInterior dl').append('<dd><p>'+especific[0].limitedpr[0].Interior[0].SeguridadInterior[u]+'</p></dd>');
			u++
		}
		$('.jsn-Download').attr('href', url+'downloads/'+especific[0].limitedpr[0].Interior[0].Download);

	}
	else if(modelo === "limited"){

		$('.cont-retic h1 span').html(especific[0].limited[0].ModeloAuto)
		// - Motor
		var cantFrenos = (especific[0].limited[0].EspecificacionTecnica[0].Frenos).length-1
		var cantRines = (especific[0].limited[0].EspecificacionTecnica[0].Rines).length-1

		//- Exterior
		var cantFaros = (especific[0].limited[0].Exterior[0].Faros).length-1
		var cantSeguridadExterior = (especific[0].limited[0].Exterior[0].SeguridadExterior).length-1
		var cantVisibilidadCris = (especific[0].limited[0].Exterior[0].Visibilidad[0].Cristales).length-1
		var cantVisibilidadEsp = (especific[0].limited[0].Exterior[0].Visibilidad[0].EspejosLaterales).length-1
		var cantTecho = (especific[0].limited[0].Exterior[0].Techo).length-1

		//- Interior
		var cantAcabadosInteriores = (especific[0].limited[0].Interior[0].AcabadosInteriores).length-1
		var cantAsientos= (especific[0].limited[0].Interior[0].Asientos).length-1
		var cantSistemaAudio = (especific[0].limited[0].Interior[0].SistemaAudio).length-1
		var cantCinturonesSeguridad = (especific[0].limited[0].Interior[0].CinturonesSeguridad).length-1
		var cantConfort = (especific[0].limited[0].Interior[0].Confort).length-1
		var cantSeguridadInterior = (especific[0].limited[0].Interior[0].SeguridadInterior).length-1

		//MOTOR
		$('.jsn-UrlMotor').attr('src', url+'assets/images/datos/'+especific[0].limited[0].EspecificacionTecnica[0].UrlMotor);
		$('.jsn-Capacidad p').html(especific[0].limited[0].EspecificacionTecnica[0].Motor[0].Capacidad);
		$('.jsn-Potencia p').html(especific[0].limited[0].EspecificacionTecnica[0].Motor[0].Potencia);
		$('.jsn-Cilindros p').html(especific[0].limited[0].EspecificacionTecnica[0].Motor[0].Cilindros);
		$('.jsn-Valvulas p').html(especific[0].limited[0].EspecificacionTecnica[0].Motor[0].Valvulas);
		//$('.jsn-Traccion p').html(especific[0].limited[0].EspecificacionTecnica[0].Motor[0].Traccion);
		//Frenos
		while(i<= cantFrenos){
			$('.jsn-Frenos dl').append('<dd><p>'+especific[0].limited[0].EspecificacionTecnica[0].Frenos[i]+'</p></dd>');
			i++
		}
		//Rines
		while(j<= cantRines){
			$('.jsn-Rines dl').append('<dd><p>'+especific[0].limited[0].EspecificacionTecnica[0].Rines[j]+'</p></dd>');
			j++
		}
		$('.jsn-UrlAuto').attr('src', url+'assets/images/datos/'+especific[0].limited[0].EspecificacionTecnica[0].UrlAuto);
		// EXTERIOR
		//Faros
		while(k<= cantFaros){
			$('.jsn-Faros dl').append('<dd><p>'+especific[0].limited[0].Exterior[0].Faros[k]+'</p></dd>');
			k++
		}
		//Seguridad exterior
		while(l<= cantSeguridadExterior){
			$('.jsn-SeguridadExterior dl').append('<dd><p>'+especific[0].limited[0].Exterior[0].SeguridadExterior[l]+'</p></dd>');
			l++
		}
		//Visibilidad
		while(m<= cantVisibilidadCris){
			$('.jsn-VisibilidadCristales dl ').append('<dd><p>'+especific[0].limited[0].Exterior[0].Visibilidad[0].Cristales[m]+'</p></dd>');
			m++
		}
		while(n<= cantVisibilidadEsp){
			$('.jsn-VisibilidadEspejosLaterales dl ').append('<dd><p>'+especific[0].limited[0].Exterior[0].Visibilidad[0].EspejosLaterales[n]+'</p></dd>');
			n++
		}
		//Techo
		while(o<= cantTecho){
			$('.jsn-Techo dl').append('<dd><p>'+especific[0].limited[0].Exterior[0].Techo[o]+'</p></dd>');
			o++
		}
		$('.jsn-UrlInterior').attr('src', url+'assets/images/datos/'+especific[0].limited[0].Exterior[0].UrlInterior);
		// INTERIOR
		//AcabadosInteriores
		while(p<= cantAcabadosInteriores){
			$('.jsn-AcabadosInteriores dl').append('<dd><p>'+especific[0].limited[0].Interior[0].AcabadosInteriores[p]+'</p></dd>');
			p++
		}
		//Asientos
		while(q<= cantAsientos){
			$('.jsn-Asientos dl').append('<dd><p>'+especific[0].limited[0].Interior[0].Asientos[q]+'</p></dd>');
			q++
		}
		//SistemaAudio
		while(r<= cantSistemaAudio){
			$('.jsn-SistemaAudio dl ').append('<dd><p>'+especific[0].limited[0].Interior[0].SistemaAudio[r]+'</p></dd>');
			r++
		}
		//CinturonesSeguridad
		while(s<= cantCinturonesSeguridad){
			$('.jsn-CinturonesSeguridad dl ').append('<dd><p>'+especific[0].limited[0].Interior[0].CinturonesSeguridad[s]+'</p></dd>');
			s++
		}
		//Confort
		while(t<= cantConfort){
			$('.jsn-Confort dl').append('<dd><p>'+especific[0].limited[0].Interior[0].Confort[t]+'</p></dd>');
			t++
		}
		//SeguridadInterior
		while(u<= cantSeguridadInterior){
			$('.jsn-SeguridadInterior dl').append('<dd><p>'+especific[0].limited[0].Interior[0].SeguridadInterior[u]+'</p></dd>');
			u++
		}
		$('.jsn-Download').attr('href', url+'downloads/'+especific[0].limited[0].Interior[0].Download);

	}
}


// //Vinculos ver mas
// $('.modelos a').on('click',function(e){
// 	e.preventDefault();
// 	var modelo = $(this).data('model');
// 	$('.especificaciones').fadeIn()
// 	$('body').addClass('hidden')
// 	especificacion(modelo)
// 	return false
// });
especificacion(camioneta);
//select
$('.jsn-select').on('change',function(){
	var modelo = $(this).val();
	especificacion(modelo)
	return false
});
// Cerrar modal
// $('.cerrar.jsn-close').on('click',function(e){
// 	e.preventDefault();
// 	$('.especificaciones').fadeOut()
// 	$('body').removeClass('hidden')
// 	$('.jsn-select option').eq(0).attr('selected','selected');
// 	resetespecif();
// 	return false
// });

//trigger para probar los textos de especificaciones
//$(".modelos a:eq(0)").trigger('click')
$('.highlights .framesHigh ul li')
var calculateHeight;
function calculateHeight(){
	var altoVent = $(window).innerHeight() -150
	var anchoVent = $(window).innerWidth()
	window.altoCont = $('.highlights .framesHigh ul li').height()
	var pos = $('.highlights .menuHigh .activo').index()
	//window.altoText = $('.highlights .framesHigh ul li > div:first-child').eq(pos).height()
	window.altoText = $('.highlights .framesHigh ul li > div:first-child').eq(pos).height()-60
	window.altoimg = altoVent - altoText
	window.anchoimg = altoVent - altoText
	//margen de la altura
	if(anchoVent >= 1271){
		$('.highSeg').css('margin-top', altoText+40)
		$('.highSeg:eq(0)').css('margin-top', altoText-15)
		window.anchoRadio = 1920/1080 * altoimg
		window.altoRadio = 1080/1920 * anchoimg
		$('.highSeg').width(844)
		$('.highSeg').height(475)
		$('.highSeg:eq(0)').width(1035)
		$('.highSeg:eq(0)').height(582)
		//console.log('mas de 1101')
	}
	else if(anchoVent <= 767) {
		var otroAncho = anchoVent - 40
		window.altoRadio = 1080/1920 * otroAncho
		$('.highSeg').css('margin-top', '-20px')
		//$('.highSeg').css('margin-top', '0px')
		//$('.highSeg').width(Math.round(otroAncho))
		//$('.highSeg').height(Math.round(altoRadio))
		$('.highSeg').width(otroAncho)
		$('.highSeg').height(altoRadio)
		//console.log('menos de 767')
	}
	else if((anchoVent >= 768) || (anchoVent <= 1270)){
		window.anchoRadio = 1920/1080 * altoimg
		window.altoRadio = 1080/1920 * anchoimg
		$('.highSeg').css('margin-top', altoText+40)
		//$('.highSeg').width(Math.round(anchoRadio))
		//$('.highSeg').height(Math.round(altoimg))
		$('.highSeg').width(anchoRadio)
		$('.highSeg').height(altoimg)

		//primer cosa
		window.anchoRadioI = 1920/840 * altoimg
		window.altoRadioI = 840/1920 * anchoimg
		$('.highSeg:eq(0)').css('margin-top', altoText-15)
		$('.highSeg:eq(0)').width(anchoRadioI)
		$('.highSeg:eq(0)').height(altoimg)
		//console.log('entre 768 y 1100')
	}
}

//- btns highlight seguridad
// $('.highSeg .seguridad1').on('click',function(){
// 	$('.highSeg .imgSeguridad').toggleClass('red');
// });
//- btns highlight Exterior
$('.highSeg .exterior1').on('mouseenter',function(){
	$('.highSeg .imgExterior').toggleClass('rin');
});
$('.highSeg .exterior1').on('mouseleave',function(){
	$('.highSeg .imgExterior').toggleClass('rin');
});
$('.highSeg .exterior2').on('mouseenter',function(){
	$('.highSeg .imgExterior').toggleClass('parrilla');
});
$('.highSeg .exterior2').on('mouseleave',function(){
	$('.highSeg .imgExterior').toggleClass('parrilla');
});
$('.highSeg .exterior3').on('mouseenter',function(){
	$('.highSeg .imgExterior').toggleClass('faros');
});
$('.highSeg .exterior3').on('mouseleave',function(){
	$('.highSeg .imgExterior').toggleClass('faros');
});
//- btns highlight Interior
$('.highSeg .interior1').on('click',function(){
	$('.highlights .framesHigh li:eq(2)').toggleClass('encendido');
});
/*$('.highSeg .interior1').on('click',function(){
	$('.highSeg .imgInterior').toggleClass('encendido');
});*/
//- btns highlight Confort
$('.highSeg .confort1').on('click',function(){
	$('.highSeg .imgConfort').toggleClass('cajuela');
});
$('.highSeg .confort2').on('click',function(){
	$('.highSeg .imgConfort').toggleClass('puerta1');
});
$('.highSeg .confort3').on('click',function(){
	$('.highSeg .imgConfort').toggleClass('puerta2');
});

calculateHeight();
$(window).resize(function(){calculateHeight();})
$(window).on('scroll',calculateHeight);


// $(window).load(function(){
//   $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.54});
// });
});