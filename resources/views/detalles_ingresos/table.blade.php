<div class="table-responsive">
    <table class="table" id="detallesIngresos-table">
        <thead>
            <tr>
                <th>Cantidad</th>
        <th>Precio</th>
        <th>Id Ingreso</th>
        <th>Id Articulo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detallesIngresos as $detallesIngreso)
            <tr>
                <td>{{ $detallesIngreso->cantidad }}</td>
            <td>{{ $detallesIngreso->precio }}</td>
            <td>{{ $detallesIngreso->id_ingreso }}</td>
            <td>{{ $detallesIngreso->id_articulo }}</td>
                <td>
                    {!! Form::open(['route' => ['detallesIngresos.destroy', $detallesIngreso->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detallesIngresos.show', [$detallesIngreso->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('detallesIngresos.edit', [$detallesIngreso->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
