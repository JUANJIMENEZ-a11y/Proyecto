<div class="table-responsive">
    <table class="table" id="detallesVentas-table">
        <thead>
            <tr>
                <th>Cantidad</th>
        <th>Precio</th>
        <th>Id Venta</th>
        <th>Id Articulo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detallesVentas as $detallesVenta)
            <tr>
                <td>{{ $detallesVenta->cantidad }}</td>
            <td>{{ $detallesVenta->precio }}</td>
            <td>{{ $detallesVenta->id_venta }}</td>
            <td>{{ $detallesVenta->id_articulo }}</td>
                <td>
                    {!! Form::open(['route' => ['detallesVentas.destroy', $detallesVenta->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detallesVentas.show', [$detallesVenta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('detallesVentas.edit', [$detallesVenta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
