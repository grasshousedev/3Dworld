@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Orden de Pedido</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($cotizacion, ['route' => ['admin.logistica.update', $cotizacion], 'method' => 'put']) !!}
            
                @include('admin.logistica.parts.form')

                {!! Form::submit('Editar pedido', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
     
@stop