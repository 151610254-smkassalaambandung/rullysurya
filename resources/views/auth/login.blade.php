@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mangga Kalebet</div>
                <div class="panel-body">
                <form class="form-horizontal" role="form" methode="POST" action="{{ url('/login') }}">

                </form>
                {!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
               <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
               {!! Form::label('email','alamat email',['class'=>'col-md-4 control-label' ]) !!}                  
                <div class="col-md-6">
                {!! Form::email('email',null,['class'=>'form-control']) !!}
                {!! $errors->first('email','<p class="help-block">:message</p>') !!}     
                </div>
                </div>

            <div class="form-group{{$errors->has('password' ) ? ' has-error' : ''}}">
                {!! Form::label('password','Password',['class'=>'col-md-4 control-label' ]) !!}
                <div class="col-md-6">
                    {!! Form::password('password',['class'=>'form-control' ]) !!}
                {!! $errors->first('password','<p class="help-block">:message</p>') !!}
                </div>
                </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('remember')!!} ingat saya
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i> Abus
                    </button>

                    <a class="btn btn-link" href="{{ url('/password/reset')}}">Poho password</a>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!!form::close() !!}
@endsection