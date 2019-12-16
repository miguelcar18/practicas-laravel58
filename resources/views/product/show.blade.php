@extends('home')

@section('page-title')
    {{ trans('pages/product.create.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/product.create.breadcrumb')])

@endsection

@section('styles')
@endsection

@section('scripts')
@endsection
