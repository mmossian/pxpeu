<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$email['protocol'] = 'mail';

/*
	@email['smtp_crypto']
	Descripcion: Encriptacion Smtp
	Valores:
		ssl, tls
		Dejar la opcion vacio '' si no se requiere encriptacion
*/
//$email['smtp_crypto'] = 'tls';
$email['charset'] = 'utf-8';
$email['wordwrap'] = TRUE;

/*
	@email['smtp_host']
	Descripcion: Host Smtp
	Tipo: string
*/
$email['smtp_host'] = 'smtp.mail.yahoo.com';

/*
	@email['smtp_port']
	Descripcion: Puerto Smtp
	Tipo: integer
*/
//$email['smtp_port'] = 25;

/*
	@email['smtp_user']
	Descripcion: Usuario Smtp
	Tipo: string
*/
$email['smtp_user'] = 'marcelo.mossian@yahoo.com';

/*
	@email['smtp_pass']
	Descripcion: Contrasena Smtp
	Tipo: string
*/
$email['smtp_pass'] = 'Maraleju_1';

/*
	@email['mailtype']
	Descripcion: Tipo de Correo
	Tipo: string
	Opciones:
		text/html
		text/plain
*/
//$email['mailtype'] = 'text/html';
$email['mailtype'] = 'html';