<?php
$mensaje = ($_POST['mensaje']);
$hash = ($_POST['hash']);
//echo $mensaje;
//echo $hash;
$transformacion = hash('sha256', $mensaje);

//echo $hashs;
if(strtolower($transformacion) == strtolower($hash)){
	http_response_code(200);
	header('Content-type: application/json');
	$dataJson = array( 'valido'=> true , 'mensaje'=> $mensaje);
	echo json_encode($dataJson);
}
else{
	http_response_code(400);
	header('Content-type: application/json');
	$dataJson = array( 'valido'=> false , 'mensaje'=> $mensaje);
	echo json_encode($dataJson);
}
header('HTTP/1.1 500 Internal Server Error');
?>