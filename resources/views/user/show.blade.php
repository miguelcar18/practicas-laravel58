@extends('home')

@section('page-title')
    {{ trans('pages/login.meta.title') }}
@endsection

@section('page-content')

@include('layouts.breadcrum', ['title' => 'Usuarios'])

@endsection

@section('styles')
@endsection

@section('scripts')
@endsection