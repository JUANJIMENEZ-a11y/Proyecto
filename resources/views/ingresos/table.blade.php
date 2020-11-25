<div class="table-responsive">
    <table class="table" id="ingresos-table">
        <thead>
            <tr>
                <th>Fecha</th>
        <th>Total</th>
        <th>Id User</th>
        <th>Id Proveedor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ingresos as $ingresos)
            <tr>
                <td>{{ $ingresos->fecha }}</td>
            <td>{{ $ingresos->total }}</td>
            <td>{{ $ingresos->id_user }}</td>
            <td>{{ $ingresos->id_proveedor }}</td>
                <td>
                    {!! Form::open(['route' => ['ingresos.destroy', $ingresos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ingresos.show', [$ingresos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ingresos.edit', [$ingresos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
