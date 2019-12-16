<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Product Page Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in the Product Page. You are free to modify
    | these language lines according to your application's requirements.
    |
     */
    'meta' => [
        'title' => '',
        'description' => '',
    ],

    'index' => [
        'page_title' => 'Listado de productos',
        'page_header' => 'Listado de productos',
        'breadcrumb' => 'Productos',

        'create' => 'Nueva producto',
        'edit' => 'Editar producto',
        'show' => 'Información de la producto',
        'destroy' => [
            'tooltip' => 'Eliminar producto',
            'alert' => [
                'title' => '¿Seguro desea eliminar esta producto?',
                'text' => 'Esta acción no se puede deshacer.',
                'confirm' => 'Si, eliminar.',
                'cancel' => 'No.',
            ],
        ],
        'columns' => [
            'code' => 'Código',
            'name' => 'Nombre',
            'price' => 'precio',
            'actions' => 'Acciones',
        ],
    ],

    'create' => [
        'page_title' => 'Crear producto',
        'page_header' => 'Crear producto',
        'breadcrumb' => 'Crear producto',
    ],

    'edit' => [
        'page_title' => 'Editar producto',
        'page_header' => 'Editar producto',
        'breadcrumb' => 'Editar producto',
    ],

    'fields' => [
        'code' => 'Código',
        'name' => 'Nombre',
        'description' => 'Descripción',
        'price' => 'Precio',
        'category_id' => 'Categoría',
        'created_at' => 'Creado',
        'submit' => [
            'save' => 'Guardar',
            'cancel' => 'Cancelar',
        ],
    ],

];
