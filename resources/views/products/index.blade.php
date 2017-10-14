@extends('layouts.layout')

@section('content')
    <div class="col-sm-8 col-sm-offset-2" style="margin-bottom:20px;">
        <h2 style="margin-bottom:30px;">
            Listado de Productos
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm pull-right">Nuevo Producto</a>
        </h2>

        <table class="table table-hover table-striped table-condensed">
            <thead>
                <h4>
                    <td width="35px"><h4 class="text-center">#</h4></td>
                    <td><h4>Nombre del Producto</h4></td>
                    <td colspan="3"><h4 class="text-center">Acción</h4></td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            <strong>{{ $product->name }}</strong>
                            <small>{{ $product->short }}</small>
                        </td>
                        <td style="vertical-align:middle;"><a href="{{ route('products.show', $product->id) }}" class="btn btn-success btn-xs">ver</a></td>
                        <td style="vertical-align:middle;"><a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-xs">editar</a></td>
                        <td style="vertical-align:middle;">
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="btn btn-danger btn-xs">borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! $products->render() !!}
    </div>
@endsection
