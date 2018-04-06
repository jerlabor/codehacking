@extends('layouts.admin')

@section('content')
    <h1>Create User</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}

        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
        {{csrf_field()}}

    {!! Form::close() !!}


    @endsection