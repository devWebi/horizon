<?php
	require_once('inc/obj_img.class.php');
	$protocolo = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === false) ? 'http' : 'https';
	$dominio= $protocolo.'://'.$_SERVER['HTTP_HOST'];
	$arquivo    = '../../uploads/'.$_GET['ano'].'/'.$_GET['mes'].'/'.$_GET['img'];

	$largura = $_GET['w'];
	$altura = $_GET['h'];
	$tipo = $_GET['t'];

	//$oImg = new canvas();
	$oImg = canvas::Instance();
	$oImg->carregaUrl($arquivo);

	$oImg->redimensiona($largura, $altura, $tipo);
	$oImg->grava();
//	exit;
?>
