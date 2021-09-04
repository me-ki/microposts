@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Sign up</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! From::email('email', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! From::password('password', ['class' => 'form-control'] !!}
                </div>
                
                <div class="form-group">
                    {!! From::label('password_confirmation', 'confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block'] !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection