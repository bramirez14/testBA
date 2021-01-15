<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="/direcciones.css">
    <title>Document</title>
</head>
<body>
<h1 id="titulo" >DIRECCIONES</h1>

<form id="search" action="" method="get">
  <input id="search-box" name="direcciones" type="text" placeholder="ingres una direccion"/>
  <input id="search-btn" value="BUSCAR" type="submit"/>
</form>
  <div id="text" >
  <?php
  if(isset ($_GET['direcciones'])){
    $direcciones =$_GET['direcciones'];

    $url ="http://servicios.usig.buenosaires.gob.ar/normalizar/?direccion=".$direcciones;
    $json = file_get_contents($url);
    $datos = json_decode($json,true);
    
 $direccion = $datos["direccionesNormalizadas"];
 for($i=0; $i<count($direccion);$i++){
 $calle = $direccion[$i]["nombre_calle"];
 $dir = $direccion[$i]["direccion"];
 echo "<h4>La direcion es:" . $dir . "</h4>"; 

 echo "<h4> La calle es:" . $calle . "</h4>";
 echo "<br>";

 }
}
  ?>
  </div>
</body>
</html>
