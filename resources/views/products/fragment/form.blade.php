<div class="form-group">
    {!! Form::label('name', 'Nombre del Producto') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
</div>

<div class="form-group">
    {!! Form::label('short', 'Descripción breve del Producto') !!}
    {!! Form::text('short', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción breve del producto']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Descripción larga del Producto') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción larga del producto']) !!}
</div>

<div class="form-group text-right">
    <a href="{{ route('products.index') }}" class="btn btn-danger">CANCELAR</a>
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>