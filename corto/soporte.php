<?php
function mostrar_datos()
{
	include("lib/conexion.php");	
	$strSQL = "SELECT * FROM `usuarios_corto` GROUP BY cusuario_email";
	$rs = mysql_query($strSQL, $Conexion) or die(mysql_error());	 

echo '<table width="100%" border="1">';
		echo "<th>ID</th>";
		echo "<th>Codigo</th>";
		echo "<th>Nombre</th>";
		echo "<th>Mail</th>";
		echo "<th>Color</th>";
		echo "<th>Estatus</th>";
		echo "<th>CP</th>";
		
	while ($fila = mysql_fetch_assoc($rs)) {
		echo "<tr>";
		
		echo "<td>".$fila['nusuario_id']."</td>";
		echo "<td>".$fila['cusuario_codigo']."</td>";
		echo "<td>".$fila['cusario_nombre']."</td>";
		echo "<td>".$fila['cusuario_email']."</td>";
		echo "<td>".$fila['cusuario_color']."</td>";
		echo "<td>".$fila['cusuario_estatus']."</td>";
		echo "<td>".$fila['cp']."</td>";
		
		echo "</tr>";

	}
		
echo '</table>';
	 
}


 function rrmdir($dir) {
   if (is_dir($dir)) {
     $objects = scandir($dir);
     foreach ($objects as $object) {
       if ($object != "." && $object != "..") {
         if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
       }
     }
     reset($objects);
     rmdir($dir);
   }
 }
 
 function scanDirectories($rootDir, $allData=array()) {
    // set filenames invisible if you want
    $invisibleFileNames = array(".", "..", ".htaccess", ".htpasswd");
	 $imageFileNames = array(".jpg", ".jpge", ".gif", ".png");
    // run through content of root directory
    $dirContent = scandir($rootDir);
    foreach($dirContent as $key => $content) {
        // filter all files not accessible
        $path = $rootDir.'/'.$content;
        if(!in_array($content, $invisibleFileNames)) {
            // if content is file & readable, add to array
            if(is_file($path) && is_readable($path)) {
                // save file name with path
				if(!in_array($content, $invisibleFileNames))
				{
					list($width, $height, $type, $attr) = getimagesize($path);
					$allData[] ="<a target='_blank' href='".$path."'><img src='".$path."' width='".($width/3)."' height='".($height/3)."'/><a>";
				}
				else
				{
					$allData[] = $path;
				}
                
            // if content is a directory and readable, add path and name
            }elseif(is_dir($path) && is_readable($path)) {
                // recursive callback to open new directory
                $allData = scanDirectories($path, $allData);
            }
        }
    }

	return $allData;

}

function print_r_tree($data)
{
    // capture the output of print_r
    $out = print_r($data, true);

    // replace something like '[element] => <newline> (' with <a href="javascript:toggleDisplay('...');">...</a><div id="..." style="display: none;">
    $out = preg_replace('/([ \t]*)(\[[^\]]+\][ \t]*\=\>[ \t]*[a-z0-9 \t_]+)\n[ \t]*\(/iUe',"'\\1<a href=\"javascript:toggleDisplay(\''.(\$id = substr(md5(rand().'\\0'), 0, 7)).'\');\">\\2</a><div id=\"'.\$id.'\" style=\"display: none;\">'", $out);

    // replace ')' on its own on a new line (surrounded by whitespace is ok) with '</div>
    $out = preg_replace('/^\s*\)\s*$/m', '</div>', $out);

    // print the javascript function toggleDisplay() and then the transformed output
    echo '<script language="Javascript">function toggleDisplay(id) { document.getElementById(id).style.display = (document.getElementById(id).style.display == "block") ? "none" : "block"; }</script>'."\n$out";
}





if(isset($_GET["d"]))
{
	mostrar_datos();
}

if(isset($_GET["s"]))
{
	
	echo "<pre>";
	print_r_tree(scanDirectories("webcam/fotos/",array()));
	echo "</pre>";
	
}
if(isset($_GET["b"]))
{
	rrmdir("webcam/fotos/");
	mkdir("webcam/fotos/");
}


?>
