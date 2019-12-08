<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Page Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in the User Page. You are free to modify
    | these language lines according to your application's requirements.
    |
     */
    'meta' => [
        'title' => '',
        'description' => '',
    ],

    'index' => [
        'page_title' => 'Listado de usuarios',
        'page_header' => 'Listado de usuarios',
        'breadcrumb' => 'Usuarios',

        'create' => 'Nueva usuario',
        'edit' => 'Editar usuario',
        'show' => 'Información usuario',
        'destroy' => [
            'tooltip' => 'Eliminar usuario',
            'alert' => [
                'title' => '¿Seguro desea eliminar esta usuario?',
                'text' => 'Esta acción no se puede deshacer.',
                'confirm' => 'Si, eliminar.',
                'cancel' => 'No.',
            ],
        ],
        'columns' => [
            'name' => 'Nombre',
            'email' => 'Email',
            'actions' => 'Acciones',
        ],
    ],

    'create' => [
        'page_title' => 'Crear usuario',
        'page_header' => 'Crear usuario',
        'breadcrumb' => 'Crear usuario',
    ],

    'edit' => [
        'page_title' => 'Editar usuario',
        'page_header' => 'Editar usuario',
        'breadcrumb' => 'Editar usuario',
    ],

    'fields' => [
        'name' => 'Nombre',
        'email' => 'Email',
        'password' => 'Contraseña',
        'password_confirmation' => 'Repetir contraseña', 
        'submit' => [
            'save' => 'Guardar',
            'cancel' => 'Cancelar',
        ],
    ],

];
