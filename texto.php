<?php
$contenido = file_get_contents('https://s3.amazonaws.com/files.principal/texto.txt');
$transformacion = hash('sha256', $contenido);
$dataJson = array( 'text'=> $contenido , 'hash'=> $transformacion);
echo json_encode($dataJson);
?>