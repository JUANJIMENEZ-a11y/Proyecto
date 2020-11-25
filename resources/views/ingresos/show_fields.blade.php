<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $ingresos->id }}</p>
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $ingresos->fecha }}</p>
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $ingresos->total }}</p>
</div>

<!-- Id User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_user', 'Id User:') !!}
    <p>{{ $ingresos->id_user }}</p>
</div>

<!-- Id Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_proveedor', 'Id Proveedor:') !!}
    <p>{{ $ingresos->id_proveedor }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ingresos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ingresos->updated_at }}</p>
</div>

