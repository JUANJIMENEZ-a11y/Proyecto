<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $categorias->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $categorias->nombre }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $categorias->descripcion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $categorias->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $categorias->updated_at }}</p>
</div>

