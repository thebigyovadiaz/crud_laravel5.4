@extends('layouts.layout')

@section('content')
    <div class="col-sm-8 col-sm-offset-2" style="margin-bottom:20px;">
        <h2 style="margin-bottom:30px;">
            Crear un nuevo Producto
        </h2>

        {!! Form::open(['route' => 'products.store']) !!}

             @include('products.fragment.form')

        {!! Form::close() !!}
        
    </div>
@endsection