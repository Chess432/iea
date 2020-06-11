@extends('layouts.app')

@section('content')
<div class="container">
<h2>Enter new license</h2>
{!! Form::open(['action' => 'LicensesController@store', 'method'=>'POST']) !!}
    <div class="form-group row">
        {{Form::label('imei', 'imei', ['class' => 'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('imei', '', ['class' => 'form-control', 'placeholder' => 'imei'])}}
            </div>
    </div>
    <div class="form-group row">
        {{Form::label('key', 'Key', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::text('key', '', ['class' => 'form-control', 'placeholder' => 'license key'])}}
        </div>
    </div>
    <div class="form-group row">
        {{Form::label('name', 'name', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
        </div>
    </div>
    <div class="form-group row">
        {{Form::label('email', 'Email', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'email'])}}
        </div>
    </div>
    <div class="form-group row">
        {{Form::label('registration_date', 'Registration date', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::date('registration_date', '', ['class' => 'form-control', 'placeholder' => 'Registration date'])}}
        </div>
    </div>
    <div class="form-group row">
        {{Form::label('activation_date', 'activation date', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::date('activation_date', '', ['class' => 'form-control', 'placeholder' => 'activation date'])}}
        </div>
    </div>
    <div class="form-group row">
        {{Form::label('expiration_date', 'expiration date', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::date('expiration_date', '', ['class' => 'form-control', 'placeholder' => 'expiration date'])}}
        </div>
    </div>
    <div class="form-group row">
        {{Form::label('validity', 'validity', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::text('validity', '', ['class' => 'form-control', 'value' => '1', 'placeholder' => 'validity'])}}
        </div>
    </div>
    {{-- <div class="form-group row">
        {{Form::label('remaining_days', 'Remaining days', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::text('remaining_days', '', ['class' => 'form-control', 'placeholder' => 'remaining days'])}}
        </div>
    </div>
    <div class="form-group row">
        {{Form::label('last_sync', 'Last sync', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::text('last_sync', '', ['class' => 'form-control', 'placeholder' => 'last sync'])}}
        </div>
    </div>
    <div class="form-group row">
        {{Form::label('last_sync_time', 'Last sync time', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::text('last_sync_time', '', ['class' => 'form-control', 'placeholder' => 'last sync time'])}}
        </div>
    </div> --}}
    <div class="form-group row">
        {{Form::label('van_sales', 'Van sales', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::text('van_sales', '', ['class' => 'form-control', 'placeholder' => 'van sales'])}}
        </div>
    </div>
    <div class="form-group row">
        {{Form::label('sync', 'sync', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::text('sync', '', ['class' => 'form-control', 'placeholder' => 'sync'])}}
        </div>
    </div>
    {{-- <div class="form-group row">
        {{Form::label('created_at', 'Created at', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::text('created_at', '', ['class' => 'form-control', 'placeholder' => 'Created at'])}}
        </div>
    </div>
    <div class="form-group row">
        {{Form::label('updated_at', 'Updated at', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::text('updated_at', '', ['class' => 'form-control', 'placeholder' => 'Updated at'])}}
        </div>
    </div> --}}
    
    {{Form::submit('submit', ['class' => 'btn btn-success btn-lg'])}}
    <a href="/iea/public/license" class="btn btn-primary btn-lg ml-5">Back</a>
   
{!! Form::close() !!}


</div>
@endsection