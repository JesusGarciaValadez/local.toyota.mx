<?php
$api_key = '566009070125998';
$api_sec = 'd2070201a3967ce3c79a1a4ba5c81636';
require_once('lib/facebook.php');
$facebook = new Facebook(array(  
                   'appId'  => $api_key,
                   'secret' => $api_sec,
                   'cookie' => true ,
                 ));
$sesion = $facebook->getUser();
if ($sesion)
  {	
	// TOKEN  				
	$token_url = "https://graph.facebook.com/oauth/access_token?client_id=".$api_key."&client_secret=".$api_sec."&grant_type=client_credentials";	
	$app_access_token = $facebook->getAccessToken();
	
	// DATOS DEL USUARIO		
    $me = $facebook->api("/me");	
	echo "<img id='image_perfil' src='"."http://graph.facebook.com/".$me['id']."/picture?type=large' />";
	//echo "<div id='id_perfil'>".$me['id']."</div>";
	echo "<div id='usr_name'>".$me['name']."</div>";
	//echo "<div id='nombre_usr_perfil'>".$me['username']."</div>";
	echo "<div id='mail_perfil'>".$me['email']."</div>";
	
	
	$code = date('YmdHis');  
  	guardar_mail($code,$me['name'],$me['email']);
	
	// Album de Fotos
	$cont_albums =0;	
	$myAlbums = $facebook->api("/me/albums");
//******************************************************* lista de amigos ordenados por el mas activo al menos activo ********************************************************
	$amigos_tags;
	foreach ($myAlbums['data'] as $album)
	{
		if(count($album['likes']['data'])>0)
		{	
			foreach ($album['likes']['data'] as $like)
			{
				$amigos_tags[$like['id']]++;
			}
		}
		
		
		$photos = $facebook->api("/{$album['id']}/photos?access_token=".$facebook->getAccessToken());
		foreach($photos['data'] as $photo)
		{
			if(count($photo['likes']['data'])>0)
			{
				foreach ($photo['likes']['data'] as $like)
				{
					$amigos_tags[$like['id']]++;
				}
			}
			if(count($photo['comments']['data'])>0)
			{		
				foreach ($photo['comments']['data'] as $comments)
				{
					$amigos_tags[$comments["from"]["id"]]+=2;
				}
			}
			if(count($photo['tags']['data'])>0)
			{		
				foreach ($photo['tags']['data'] as $tags)
				{
					$amigos_tags[$tags['id']]+=3;
				}
			}
		}
		if(count($amigos_tags)>20){break;}// si ya tenemos 20 amigos en la lista salimos del loop
	
	}
	//se elimina al propio usuario y los que no tienen nombre
	$amigos_tags[""]=-1;
	$amigos_tags[$me['id']]=-1;


	arsort($amigos_tags);
		//var_dump($amigos_tags);

		$max_amigos =count($amigos_tags);

		if($max_amigos >10){$max_amigos = 10;}

		$max_amigos = rand(1,$max_amigos);
	
		$i=0;
		foreach ($amigos_tags as $amigo => $dato)
		{
			if($i == $max_amigos)
			{
				$id_amigo_activo =$amigo;
				break;
			}
			$i++;	
		}
	
		$amigo_data = $facebook->api("/".$id_amigo_activo."?access_token=".$facebook->getAccessToken());
		$amigo_activo_nombre = $amigo_data['name'];
		$amigo_activo_foto = "http://graph.facebook.com/".$amigo_data['id']."/picture?type=large";
	
		if($amigo_activo_nombre != "")
		{
			echo "<div id='usr_friend_name'>".$amigo_activo_nombre."</div>";		
			echo "<img id='image_amigo' src='".$amigo_activo_foto."' />";
			echo "<br/>";
		}
		else
		{
			echo "<div id='usr_friend_name'>Barbara</div>";		
			echo "<img id='image_amigo' src='img/default/usr_f.jpg' />";
			echo "<br/>";		
		}

//***************************************************************************************************************			
	
	
	$img_albums =array();
	$img_albums_full =array();
	$cont_photos=0;
	$cont_photos_full=0;
	foreach ($myAlbums['data'] as $album)
	{  	 
		$photos = $facebook->api("/{$album['id']}/photos?access_token=".$facebook->getAccessToken());	
				
	
		foreach($photos['data'] as $photo)
		{
			if(count($photo['tags']['data'])>0)
			{
				foreach ($photo['tags']['data'] as $tags)
				{
					if($tags['id'] == $me['id'])// si esta tagueado el ususario
					{
						$img_albums[$cont_photos] = $photo['source'];
						$cont_photos++;
					}
					else
					{
						$img_albums_full[$cont_photos_full] = $photo['source'];
						$cont_photos_full++;
					}			
				}
			}
		}
		
		// si ya tenemos 30 fotos tagueadas o 120 normales salimos del loop
		if($cont_photos>30){break;}
		if($cont_photos_full>120){break;}				
	}

	if($cont_photos>4)
	{	
		for($i=1;$i<3;$i++)
		{
			$foto = rand(0,$cont_photos-1);	
		
			echo "<img id='perfil_foto".$i."' src='{$img_albums[$foto]}' /> <br />";

		}
	}
	else
	{
		if($cont_photos_full>4)
		{
			for($i=1;$i<3;$i++)
			{
				$foto = rand(0,$cont_photos_full-1);		
			
				echo "<img id='perfil_foto".$i."' src='{$img_albums_full[$foto]}' /> <br />";		
			}		
		}
		else
		{
			echo "<img id='perfil_foto1' src='img/default/pic1.jpg' /> <br />";
			echo "<img id='perfil_foto2' src='img/default/pic2.jpg' /> <br />";
		}
	}

  echo "img_taged ".$cont_photos;
  echo "<br>img_notaged ".$cont_photos_full;





  }
 



function guardar_mail($clave,$nombre,$mail)
{
	include("lib/conexion.php");	
	$strSQL = "insert into usuarios_corto (cusuario_codigo,cusario_nombre,cusuario_email )values ('$clave','$nombre','$mail')";
	$rs = mysql_query($strSQL, $Conexion) or die(mysql_error());
	 echo "<div id='code_id'>".$clave."</div>";
} 
  
  
?>