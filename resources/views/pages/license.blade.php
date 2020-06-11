@extends('layouts.app')

@section('content')
<h3 class="text-center bg-primary text-white">All Licenses</h3>
@if(count($licenses) > 0)
<table class="table table-bordered">
    <thead>
      <tr class="bg-dark text-white">
        <th scope="col">id</th>
        <th scope="col">imei</th>
        <th scope="col">Name</th>
        <th scope="col">Key</th>
        <th scope="col">Email</th>
        <th scope="col">Registration date</th>
        <th scope="col">Activation Date</th>
        <th scope="col">Expiration date</th>
        <th scope="col">Validity</th>
        <th scope="col">Remaining days</th>
        <th scope="col">Last sync</th>
        <th scope="col">Last sync time</th>
        <th scope="col">van sales</th>
        <th scope="col">sync</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Manage</th>
      </tr>
    </thead>
    <tbody>
    @foreach($licenses as $license)
        {{-- <div class="well"> --}}
            <tr>
                <td>{{$license -> id}}</td>
                <td>{{$license -> imei}}</td>
                <td>{{$license -> name}}</td>
                <td>{{$license -> key}}</td>
                <td>{{$license -> email}}</td>
                <td>{{$license -> registration_date}}</td>
                <td>{{$license -> activation_date}}</td>
                <td>{{$license -> expiration_date}}</td>
                <td>{{$license -> validity}}</td>
                <td>{{$license -> remaining_days}}</td>
                <td>{{$license -> last_sync}}</td>
                <td>{{$license -> last_sync_time}}</td>
                <td>{{$license -> van_sales}}</td>
                <td>{{$license -> sync}}</td>
                <td>{{$license -> created_at}}</td>
                <td>{{$license -> 	updated_at}}</td>
                <td>
                <a href="/iea/public/license/{{$license->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                    {{-- <a href="/iea/public/license/{{$license->id}}/delete" class="btn btn-danger btn-sm mt-2">Delete</a> --}}
                {!!Form::open(['action' => ['LicensesController@destroy', $license->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm mt-1'])}}
                {!!Form::close()!!}
                </td>
              </tr>
            {{-- <h3>{{$license -> imei}}</h3>
        </div> --}}
    @endforeach
        </tbody>
    </table>
@else
    <p class="text-danger">There are no licenses found</p>
@endif
<div class="container">
    <a href="/iea/public/license/create" class="btn btn-primary mb-3">Create license</a>
</div>


@endsection