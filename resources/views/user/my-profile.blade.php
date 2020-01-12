@extends('home')

@section('page-title')
    {{ trans('pages/user.my_profile.page_title') }}
@endsection

@section('page-content')

@include('layouts.breadcrum', ['title' => trans('pages/user.my_profile.breadcrumb')])
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                	<div class="row">
                		<div class="col-md-4 offset-md-4">
                			<img src="{{ asset('assets/images/background/img4.jpg') }}" class="img-fluid" style="max-width: 300px; height: auto">
                		</div>
                	</div>
                	<div class="pull-center text-center">
                		<h3> &nbsp;<b class="text-danger">{{ auth()->user()->name }}</b></h3>
                		<p class="m-l-5">
                			<b>{{ trans('pages/user.fields.email') }}: </b>{{ auth()->user()->email }} <br>
                			<b>{{ trans('pages/user.fields.created_at') }}: </b><span class="date-time-format">{{ auth()->user()->created_at->toW3cString() }}</span>
                		</p>
                	</div>
            	</div>
            </div>
        </div>
    </div>
</div>
					
@endsection

@section('styles')
@endsection

@section('scripts')
@endsection