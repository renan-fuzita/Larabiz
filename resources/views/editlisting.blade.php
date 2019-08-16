@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Linsting<a href="/dashboard" class="float-right btn btn-default btn-xs">Go Back</a></div>
               <!-- Falta preecher os valores padroes p quando estiverem vazios -->
                <div class="card-body">

                <!-- NAO precisa de FOREACH  - NAO esta escrito no HTML por isso n precisa de { { } }-->
                <!--  Foi passado o ID pelo controller - 
                    Quando esta dentro do Form n precisa de {} e de foreach-->
                        {!! Form::open(['action' => ['ListingsController@update',$listing->id],'method' => 'POST']) !!}
                        {{ Form::bsText('name', $listing->name )}} 
                        {{ Form::bsText('website', $listing->website )}}
                        {{ Form::bsText('email', $listing->email )}} 
                        {{ Form::bsText('phone', $listing->phone )}} 
                        {{ Form::bsText('address', $listing->address )}} 
                        {{ Form::bsTextArea('bio', $listing->bio )}} 
                        {{ Form::hidden('_method','PUT') }}
                        {{ Form::bsSubmit('submit',['class'=>'btn btn-primary'])}} 
            
                    {!! Form::close() !!}   
                  
                </div>


@endsection