<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Archivo de configuracion de correos de la aplicacion
|--------------------------------------------------------------------------
| Ubicacion: application/config
|
|
*/

/*
	Correos
*/

/*
	@config['mail-default-from']
	Descripcion: Usuario por defecto
	Tipo: array
	[
		'info@pxpeuskadi.com' => 'PxpEuskadi'
	]
*/
$config['mail-default-from'] = [
	'web@pxpeuskadi.eus' => 'PxpEuskadi'
];

$config['pxp-to'] = [
	'buzon-sugerencias' => [
		'buzon@ejemplo.eus' => 'Buzon Sugerencias o lo que fuera'
	]
];

$config['protocol'] = 'smtp';

/*
	@config['smtp_crypto']
	Descripcion: Encriptacion Smtp
	Valores:
		ssl, tls
		Dejar la opcion vacio '' si no se requiere encriptacion
*/
$config['smtp_crypto'] = 'ssl';
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;

/*
	@config['smtp_host']
	Descripcion: Host Smtp
	Tipo: string
*/
$config['smtp_host'] = 'smtp.gmail.com';

/*
	@config['smtp_port']
	Descripcion: Puerto Smtp
	Tipo: integer
*/
$config['smtp_port'] = 465;

/*
	@config['smtp_user']
	Descripcion: Usuario Smtp
	Tipo: string
*/
$config['smtp_user'] = 'mmossian@gmail.com';

/*
	@config['smtp_pass']
	Descripcion: Contrasena Smtp
	Tipo: string
*/
$config['smtp_pass'] = 'mM_260864';

/*
	@config['mailtype']
	Descripcion: Tipo de Correo
	Tipo: string
	Opciones:
		text/html
		text/plain
*/
$config['mailtype'] = 'text/html';
