@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Linsting<a href="/dashboard" class="float-right btn btn-default btn-xs">Go Back</a></div>
               <!-- Falta preecher os valores padroes p quando estiverem vazios -->
                <div class="card-body">
                        {!! Form::open(['action' => 'ListingsController@store','method' => 'POST']) !!}
                        {{Form::bsText('name','',['placeholder'=>'Name'])}} 
                        {{Form::bsText('website','',['placeholder'=>'Website'])}}
                        {{Form::bsText('email','',['placeholder'=>'Email'])}} 
                        {{Form::bsText('phone','',['placeholder'=>'Phone'])}} 
                        {{Form::bsText('address','',['placeholder'=>'Address'])}} 
                        {{Form::bsTextArea('bio','',['placeholder'=>'About the business'])}} 
                        
                        {{Form::bsSubmit('submit',['class'=>'btn btn-primary'])}} 
            
                    {!! Form::close() !!}   
                </div>


@endsection