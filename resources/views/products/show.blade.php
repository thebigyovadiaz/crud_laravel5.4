@extends('layouts.layout')

@section('content')
    <div class="col-sm-8 col-sm-offset-2">
        <div class="button-group text-right">
            <a href="{{ route('products.index') }}" class="btn btn-default btn-sm">Regresar</a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Editar</a>
        </div>
        <h2>
            {{ $product->name }}
        </h2>

        <p>
            {{ $product->short }}
        </p>

        {!! $product->body !!}
    </div>
@endsection