<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Id User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_user', 'Id User:') !!}
    {!! Form::text('id_user', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_proveedor', 'Id Proveedor:') !!}
    {!! Form::text('id_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ingresos.index') }}" class="btn btn-default">Cancel</a>
</div>
