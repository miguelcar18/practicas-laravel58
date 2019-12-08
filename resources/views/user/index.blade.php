@extends('home')

@section('content')
@include('layouts.breadcrum', ['title' => 'Usuarios'])
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Usuarios</h5>
                    <div class="card-body">
                        <a href="{{ route('user.create') }}" class="btn btn-success float-right"><i class="fas fa-plus"></i> Agregar</a>
                    </div>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="#" data-id="{{ $user->id }}" class="btn btn-danger tooltip-error"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                        {!! Form::open(array('route' => array('user.destroy', 'USER_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('styles')
<link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@stop

@section('javascripts')
<script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
<script type="text/javascript">

    $('#zero_config').DataTable();

    $('.tooltip-error').click(function (e) {
        let message = "¿Está realmente seguro(a) de eliminar este registro?";

        if(confirm(message)){
            let form = $('#form-delete');
            let replaceAction = form.attr('action', form.attr('action').replace('USER_ID', $(this).data('id')));
            form.submit();
        } else {
            e.preventDefault();
        }
    });

</script>
@stop