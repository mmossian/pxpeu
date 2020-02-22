<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| ARCHIVO DE TEMPLATES DE CORREOS
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
| Ubicacion: application/language/es
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
| Nombre : mail-tpl_lang.php
|--------------------------------------------------------------------------
|
*/

$lang['tpl-altBody'] = '<p><small><i>Este es un correo electr&oacute;nico generado autom&aacute;ticamente.<br>Por favor no responda el mismo.</i></small></p>';

$lang['tpl-buzon-sugerencias'] = [
	'subject' => 'Correo desde el buzon de sugerencias.',
	'tplHeader' => 'Ha recibido un correo desde el formulario de buzon de su pagina web.',
	'tplContent' => '
		<p>Nombre: %nombre%</p>
		<p>Apellido: %apellido%</p>
		<p>Autoescuela: %autoescuela%</p>
		<p>Email: %email%</p>
		<p>Telefono: %telefono%</p>
		<p>Mensaje: %comentario%</p>
	',
	'tplSignature' => ''
];

$lang['tpl-preinscripcion'] = [
	'subject' => 'Solicitud Preinscripcion.',
	'tplHeader' => 'Solicitud de Preinscripción.',
	'tplContent' => '
		<p style="box-sizing: border-box; color: #74787E; font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; font-size: 16px;line-height: 1.5em; margin-top: 0;" align="left">Se ha enviado una solicitud de Preinscripción desde la web.</p>
		<p style="box-sizing: border-box; color: #2F3133; font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; font-size: 16px; font-weight: bold; line-height: 1.5em; margin-top: 0;" align="left">Datos personales:
		</p>
		<p style="box-sizing: border-box; color: #74787E; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1em; margin-top: 0;" align="left">Nombre: %nombre%
		</p>
		<p style="box-sizing: border-box; color: #74787E; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1em; margin-top: 0;" align="left">Apellidos: %apellido%
		</p>
		<p style="box-sizing: border-box; color: #74787E; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1em; margin-top: 0;" align="left">Teléfono de contacto: %telefono%
		</p>
		<p style="box-sizing: border-box; color: #74787E; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1em; margin-top: 0;" align="left">DNI: %dni%
		</p>
		<p style="box-sizing: border-box; color: #74787E; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1em; margin-top: 0;" align="left">Idioma de preferencia: %idioma%
		</p>
		</br>
		<p style="box-sizing: border-box; color: #2F3133; font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; line-height: 1.5em; margin-top: 0;" align="left">Información del curso:
		</p>

		<p style="box-sizing: border-box; color: #74787E; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1em; margin-top: 0;" align="left">Fecha: %fecha-curso%
		</p>
		<p style="box-sizing: border-box; color: #74787E; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1em; margin-top: 0;" align="left">Horario: %horario-curso%
		</p>
		<p style="box-sizing: border-box; color: #74787E; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1em; margin-top: 0;" align="left">Idioma: %idioma-curso%
		</p>
		<p style="box-sizing: border-box; color: #74787E; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1em; margin-top: 0;" align="left">Centro: %nombre-centro%
		</p>
		<p style="box-sizing: border-box; color: #74787E; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1em; margin-top: 0;" align="left">Dirección:  %direccion-centro%
		</p>
		<p style="box-sizing: border-box; color: #74787E; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1em; margin-top: 0;" align="left">Precio:  € %precio-curso%
		</p>
	',
	'tplSignature' => ''
];