<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| ARCHIVO DE MENSAJES DE LA APLICACION
|--------------------------------------------------------------------------
|
|
*/
$lang['message-processing'] = 'Procesando ... ';

$lang['message-general-error'] = [
	'cls' => 'danger',
	'icon' => 'fa fa-times-circle',
	'message' => 'Error!!!<br>%debug%'
];

$lang['message-sent-ok'] = [
	'message' => 'El correo ha sido enviado correctamente.',
	'icon' => 'fa fa-check-circle',
	'cls' => 'success'
];

$lang['message-sent-error'] = [
	'message' => 'Error!!!<br>El correo no ha podido ser enviado.',
	'icon' => 'fa fa-times-circle',
	'cls' => 'danger'
];