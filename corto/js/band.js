function CreateDelegate(contextObject, delegateMethod){
    return function()  {
        return delegateMethod.apply(contextObject, arguments);
    }
}



	var userBandwidth = 0;
	var AverageBandwidth =100;
	
	var startTime;
	var endTime;
	var imgSize = 449000;
	var loadTimeInSec;	
	var HistoricBandwidth =new Array();
	var iterar =0;
	
	function GetUserBandwidth() {
		var testImage = new Image();
		testImage.src = "lib/img.php?r="+Math.random();
		startTime = (new Date()).getTime();
		testImage.onload = CreateDelegate(testImage, DoneWithTest);		
	}
	
	function DoneWithTest() {
		endTime = (new Date()).getTime();
		loadTimeInSec = (endTime - startTime) / 1000;
		userBandwidth = (imgSize / loadTimeInSec) / 1024;	
				
		HistoricBandwidth[iterar]= Math.round(userBandwidth);
		//console.log("ancho de banda:"+HistoricBandwidth[iterar]+ " kb/s");
		iterar++;
		
		
		
		if(iterar < 10)
		{
			setTimeout('GetUserBandwidth();',userBandwidth)
		}
		else
		{
			var suma=0;
			for(i=0;i<iterar;i++)
			{
				suma=suma+HistoricBandwidth[i];	
				//console.log("+ "+HistoricBandwidth[i]);
			}
			AverageBandwidth=Math.round(suma/iterar);
			console.log("media: "+AverageBandwidth+ " kb/s");
			
			iterar=0;
			calcular_tiempos();
			
		
		}		
		
		
		
		if(AverageBandwidth<0){AverageBandwidth=10;}
		if(AverageBandwidth>1000){AverageBandwidth=1000;}

		
		
	}
	
function calcular_tiempos()
{
	peso_video_por_bloque[0]=((porcentaje_video_por_bloque[0]*peso_video)/100)+peso_imagenes_por_bloque[0];
	peso_video_por_bloque[1]=((porcentaje_video_por_bloque[1]*peso_video)/100)+peso_imagenes_por_bloque[1];
	peso_video_por_bloque[2]=((porcentaje_video_por_bloque[2]*peso_video)/100)+peso_imagenes_por_bloque[2];
	peso_video_por_bloque[3]=((porcentaje_video_por_bloque[3]*peso_video)/100)+peso_imagenes_por_bloque[3];	
	
	peso_video_por_bloque[0]=peso_video_por_bloque[0]*porcentaje_de_carga;
	peso_video_por_bloque[1]=peso_video_por_bloque[1]*porcentaje_de_carga;
	peso_video_por_bloque[2]=peso_video_por_bloque[2]*porcentaje_de_carga;
	peso_video_por_bloque[3]=peso_video_por_bloque[3]*porcentaje_de_carga;
	
	tiempo_de_carga_por_bloque[0]=Math.round(peso_video_por_bloque[0]/AverageBandwidth);
	tiempo_de_carga_por_bloque[1]=Math.round(peso_video_por_bloque[1]/AverageBandwidth);
	tiempo_de_carga_por_bloque[2]=Math.round(peso_video_por_bloque[2]/AverageBandwidth);
	tiempo_de_carga_por_bloque[3]=Math.round(peso_video_por_bloque[3]/AverageBandwidth);
	
	console.log(tiempo_de_carga_por_bloque[0]+ "seg");
	console.log(tiempo_de_carga_por_bloque[1]+ "seg");
	console.log(tiempo_de_carga_por_bloque[2]+ "seg");
	console.log(tiempo_de_carga_por_bloque[3]+ "seg");	
	// a milisegundos
	tiempo_de_carga_por_bloque[0]=tiempo_de_carga_por_bloque[0]*1000;
	tiempo_de_carga_por_bloque[1]=tiempo_de_carga_por_bloque[1]*1000;
	tiempo_de_carga_por_bloque[2]=tiempo_de_carga_por_bloque[2]*1000;
	tiempo_de_carga_por_bloque[3]=tiempo_de_carga_por_bloque[3]*1000;
}	

var peso_video = 51000;
var porcentaje_de_carga = 0.9;
var porcentaje_video_por_bloque = new Array();

porcentaje_video_por_bloque[0]=15.31;
porcentaje_video_por_bloque[1]=20.85;
porcentaje_video_por_bloque[2]=23.82;
porcentaje_video_por_bloque[3]=22.97;

var peso_imagenes_por_bloque = new Array();
peso_imagenes_por_bloque[0]=460.8;
peso_imagenes_por_bloque[1]=1228.8;
peso_imagenes_por_bloque[2]=614.4;
peso_imagenes_por_bloque[3]=2048;

var peso_video_por_bloque=new Array();
var tiempo_de_carga_por_bloque = new Array();

