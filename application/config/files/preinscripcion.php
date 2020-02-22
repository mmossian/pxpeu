<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

$config['app-files'] = [
	'views' => [
		'%lang%/preinscripcion'
	],
	'js' => [
		'%base-url%assets-vial/js/ajax.js',
		'%base-url%assets-vial/js/loading-bar.js',
		'%base-url%assets-vial/js/interface.js'
	],
	'fns' => [
		" $(function(){ $(document.body).Interface() });"
	]
];