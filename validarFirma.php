<?php
$mensaje = ($_POST['mensaje']);
$hash = ($_POST['hash']);
//echo $mensaje;
//echo $hash;
$transformacion = hash('sha256', $mensaje);

if(!is_null($hash) and !is_null($mensaje)){
	//echo $hashs;
	if(strtolower($transformacion) == strtolower($hash)){
		header("HTTP/1.1 200 OK");
		header('Content-type: application/json');
		$dataJson = array( 'valido'=> true , 'mensaje'=> $mensaje);
		echo json_encode($dataJson);
	}
	else{
		header("HTTP/1.1 200 OK");
		header('Content-type: application/json');
		$dataJson = array( 'valido'=> false , 'mensaje'=> $mensaje);
		echo json_encode($dataJson);
	}
	//header('HTTP/1.1 500 Internal Server Error');
}
else{
	header("HTTP/1.1 400");
}
?>