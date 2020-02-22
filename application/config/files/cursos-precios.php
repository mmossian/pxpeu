<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

$config['app-files'] = [
	'views' => [
		'%lang%/cursos-y-precios'
	],
	'js' => [
		'%base-url%assets-vial/js/interface.js'
	],
	'fns' => [
		" $(function(){ $(document.body).Interface() });"
	]
];