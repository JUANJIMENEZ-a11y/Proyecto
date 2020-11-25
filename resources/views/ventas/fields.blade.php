<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    {!! Form::text('id_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::text('id_usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ventas.index') }}" class="btn btn-default">Cancel</a>
</div>
