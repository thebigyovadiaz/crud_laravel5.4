@extends('layouts.layout')

@section('content')
    <div class="col-sm-8 col-sm-offset-2" style="margin-bottom:20px;">
        <h2 style="margin-bottom:30px;">
            Editar un Producto
        </h2>

        {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}

             @include('products.fragment.form')

        {!! Form::close() !!}

    </div>
@endsection