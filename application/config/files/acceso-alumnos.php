<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

$config['app-files'] = [
	'views' => [
		'%lang%/acceso-alumnos'
	],
	'js' => [
		'%base-url%assets-vial/js/interface.js'
	],
	'fns' => [
		" $(function(){ $(document.body).Interface() });"
	]
];