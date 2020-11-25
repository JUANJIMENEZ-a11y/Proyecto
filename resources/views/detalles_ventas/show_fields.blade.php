<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $detallesVenta->id }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $detallesVenta->cantidad }}</p>
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    <p>{{ $detallesVenta->precio }}</p>
</div>

<!-- Id Venta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_venta', 'Id Venta:') !!}
    <p>{{ $detallesVenta->id_venta }}</p>
</div>

<!-- Id Articulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_articulo', 'Id Articulo:') !!}
    <p>{{ $detallesVenta->id_articulo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $detallesVenta->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $detallesVenta->updated_at }}</p>
</div>

