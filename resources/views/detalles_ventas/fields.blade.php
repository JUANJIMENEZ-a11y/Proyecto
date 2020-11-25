<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Venta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_venta', 'Id Venta:') !!}
    {!! Form::text('id_venta', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Articulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_articulo', 'Id Articulo:') !!}
    {!! Form::text('id_articulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('detallesVentas.index') }}" class="btn btn-default">Cancel</a>
</div>
