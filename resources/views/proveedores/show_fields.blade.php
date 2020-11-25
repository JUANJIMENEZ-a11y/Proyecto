<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $proveedores->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $proveedores->nombre }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $proveedores->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $proveedores->updated_at }}</p>
</div>

