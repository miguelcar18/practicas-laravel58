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
        'page_title' => 'Listado de eventos',
        'page_header' => 'Listado de eventos',
        'breadcrumb' => 'Eventos',

        'create' => 'Nuevo evento',
        'edit' => 'Editar evento',
        'show' => 'Información del evento',
        'destroy' => [
            'tooltip' => 'Eliminar evento',
            'alert' => [
                'title' => '¿Seguro desea eliminar esta evento?',
                'text' => 'Esta acción no se puede deshacer.',
                'confirm' => 'Si, eliminar.',
                'cancel' => 'No.',
            ],
        ],
        'columns' => [
            'name' => 'Nombre',
            'start_date' => 'Inicio',
            'end_date' => 'Fin',
            'actions' => 'Acciones',
        ],
    ],

    'create' => [
        'page_title' => 'Crear evento',
        'page_header' => 'Crear evento',
        'breadcrumb' => 'Crear evento',
    ],

    'edit' => [
        'page_title' => 'Editar evento',
        'page_header' => 'Editar evento',
        'breadcrumb' => 'Editar evento',
    ],

    'fields' => [
        'name' => 'Nombre',
        'address' => 'Dirección',
        'start_date' => 'Fecha de inicio',
        'end_date' => 'Fecha de fin',
        'client' => 'Cliente',
        'phone' => 'Teléfono',
        'observations' => 'Observaciones',
        'created_at' => 'Creado',
        'submit' => [
            'save' => 'Guardar',
            'cancel' => 'Cancelar',
        ],
    ],

];
