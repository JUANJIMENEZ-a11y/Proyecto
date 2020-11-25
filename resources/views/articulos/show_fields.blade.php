<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $articulos->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $articulos->nombre }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $articulos->descripcion }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $articulos->cantidad }}</p>
</div>

<!-- Precio Por Unidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_por_unidad', 'Precio Por Unidad:') !!}
    <p>{{ $articulos->precio_por_unidad }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $articulos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $articulos->updated_at }}</p>
</div>

