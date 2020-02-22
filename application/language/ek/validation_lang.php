<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| ARCHIVO DE IDIOMAS - VALIDACION DE FORMULARIOS
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
| Ubicacion: application/language/es
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
| Nombre : validation_lang.php
|--------------------------------------------------------------------------
|
*/
$lang['rules-buzon'] = [
	[
		'field' => 'buzon_nombre',
        'label' => 'Nombre',
        'rules' => 'required|regex_match[/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/]|max_length[20]'
	],
	[
		'field' => 'buzon_apellidos',
        'label' => 'Apellidos',
        'rules' => 'required|regex_match[/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/]|max_length[50]'
	],
	[
		'field' => 'buzon_autoescuela',
        'label' => 'Apellidos',
        'rules' => 'required|regex_match[/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/]|max_length[30]'
	],
	[
		'field' => 'buzon_email',
        'label' => 'Correo Electr&oacute;nico',
        'rules' => 'required|valid_email'
	],
	[
		'field' => 'buzon_telefono',
        'label' => 'Tel&eacute;fono',
        'rules' => 'required|alpha_numeric_spaces|max_length[15]'
	],
	[
		'field' => 'buzon_comentario',
        'label' => 'Comentario',
        'rules' => 'required|max_length[150]|regex_match[/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/]'
	],
	[
		'field' => 'privacy',
        'label' => 'Política de Privacidad',
        'rules' => 'required'
	]
];

$lang['rules-preinscripcion'] = [
	[
		'field' => 'pre_nombre',
        'label' => 'Nombre',
        'rules' => 'required|regex_match[/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/]|max_length[50]'
	],
	[
		'field' => 'pre_apellidos',
        'label' => 'Apellidos',
        'rules' => 'required|regex_match[/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/]|max_length[50]'
	],
	[
		'field' => 'pre_dni',
        'label' => 'DNI',
        'rules' => 'required|regex_match[/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/]|max_length[20]'
	],
	[
		'field' => 'pre_telefono',
        'label' => 'Tel&eacute;fono',
        'rules' => 'required|alpha_numeric_spaces|max_length[30]'
	],
	[
		'field' => 'privacy',
        'label' => 'Política de Proteccion de Datos',
        'rules' => 'required'
	]
];