<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $ventas->id }}</p>
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $ventas->fecha }}</p>
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $ventas->total }}</p>
</div>

<!-- Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    <p>{{ $ventas->id_cliente }}</p>
</div>

<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    <p>{{ $ventas->id_usuario }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ventas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ventas->updated_at }}</p>
</div>

