<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Event Page Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in the Event Page. You are free to modify
    | these language lines according to your application's requirements.
    |
     */
    'meta' => [
        'title' => '',
        'description' => '',
    ],

    'index' => [
        'page_title' => 'Inventario',
        'page_header' => 'Inventario',
        'breadcrumb' => 'Inventario',

        'create' => 'Nuevo registro',
        'edit' => 'Editar registro',
        'show' => 'Información del registro',
        'destroy' => [
            'tooltip' => 'Eliminar registro',
            'alert' => [
                'title' => '¿Seguro desea eliminar esta registro?',
                'text' => 'Esta acción no se puede deshacer.',
                'confirm' => 'Si, eliminar.',
                'cancel' => 'No.',
            ],
        ],
        'columns' => [
            'product' => 'Producto',
            'quantity' => 'Cantidad',
            'type' => 'Tipo',
            'actions' => 'Acciones',
        ],
    ],

    'create' => [
        'page_title' => 'Crear registro',
        'page_header' => 'Crear registro',
        'breadcrumb' => 'Crear registro',
    ],

    'edit' => [
        'page_title' => 'Editar registro',
        'page_header' => 'Editar registro',
        'breadcrumb' => 'Editar registro',
    ],

    'fields' => [
        'product_id' => 'Producto',
        'quantity' => 'Cantidad',
        'type' => 'Tipo',
        'observations' => 'Observaciones',
        'user_id' => 'Usuario',
        'created_at' => 'Creado',
        'submit' => [
            'save' => 'Guardar',
            'cancel' => 'Cancelar',
        ],
    ],

];
