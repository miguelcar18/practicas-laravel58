<div class="row">
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-account"></i></h1>
                <h6 class="text-white">{{ $users }} Usuarios</h6>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-checkbox-multiple-blank"></i></h1>
                <h6 class="text-white">{{ $categories }} Categorías</h6>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-barcode-scan"></i></h1>
                <h6 class="text-white">{{ $products }}Productos</h6>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-dropbox"></i></h1>
                <h6 class="text-white">{{ $inventories }} Registros en inventario</h6>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-calendar-text"></i></h1>
                <h6 class="text-white">{{ $events }} Eventos</h6>
            </div>
        </div>
    </div>
</div>
@if($event)
<div class="alert alert-warning" role="alert">
    <h4 class="alert-heading">¡Próximo evento!</h4>
    <p>El evento más cercano registrado es "{{ $event->name }}" en "{{ $event->address }}". Se realizará el {{ $event->start_date_notification_format }}</p>
    <hr>
    <p class="mb-0"><a href="{{ route('event.edit', $event) }}" class="btn btn-warning">Ver detalles</a></p>
</div>
@else
<div class="alert alert-warning" role="alert">
    <h4 class="alert-heading">¡Atención!</h4>
    <p>No hay más eventos próximos registrados</p>
    <hr>
    <p class="mb-0"><a href="{{ route('event.index') }}" class="btn btn-warning">Ver listado de eventos</a></p>
</div>
@endif
