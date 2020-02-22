<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

$config['app-files'] = [
	'views' => [
		'%lang%/ficha-centro'
	],
	'js' => [
		'%base-url%assets-vial/js/gmap.js',
		'%base-url%assets-vial/js/centros.js',
		'%base-url%assets-vial/js/interface.js'
	],
	'fns' => [
		" $(function(){ $(document.body).Interface('ficha') });"
	],
	'requireGmap' => TRUE
];