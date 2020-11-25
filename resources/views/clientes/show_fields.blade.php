<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $clientes->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $clientes->nombre }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $clientes->direccion }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $clientes->telefono }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $clientes->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $clientes->updated_at }}</p>
</div>

