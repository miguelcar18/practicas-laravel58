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
            'address' => 'Dirección',
            'start_date' => 'Inicio',
            'end_date' => 'Fin',
            'actions' => 'Acciones',
        ],
    ],

    'create' => [
        'page_title' => 'Crear evento',
        'page_header' => 'Crear evento',
        'form_header' => 'Información general',
        'table_header' => 'Productos',
        'breadcrumb' => 'Crear evento',
    ],

    'edit' => [
        'page_title' => 'Editar evento',
        'page_header' => 'Editar evento',
        'form_header' => 'Información general',
        'table_header' => 'Productos',
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
        'product' => 'Producto',
        'quantity' => 'Cantidad',
        'identification' => 'Cédula / Rif',
        'email' => 'Email',
        'payment_method' => 'Método de pago',
        'reference_code' => 'Código de referencia',
        'unit_price' => 'Precio unitario',
        'total_price' => 'Total',
        'submit' => [
            'save' => 'Guardar',
            'cancel' => 'Cancelar',
        ],
    ],

];
