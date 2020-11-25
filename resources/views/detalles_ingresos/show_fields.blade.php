<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $detallesIngreso->id }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $detallesIngreso->cantidad }}</p>
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    <p>{{ $detallesIngreso->precio }}</p>
</div>

<!-- Id Ingreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_ingreso', 'Id Ingreso:') !!}
    <p>{{ $detallesIngreso->id_ingreso }}</p>
</div>

<!-- Id Articulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_articulo', 'Id Articulo:') !!}
    <p>{{ $detallesIngreso->id_articulo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $detallesIngreso->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $detallesIngreso->updated_at }}</p>
</div>

