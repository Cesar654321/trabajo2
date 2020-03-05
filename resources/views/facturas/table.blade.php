<div class="table-responsive">
    <table class="table" id="facturas-table">
        <thead>
            <tr>
                <th>Nit</th>
        <th>Tienda</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($facturas as $factura)
            <tr>
                <td>{{ $factura->nit }}</td>
            <td>{{ $factura->tienda }}</td>
                <td>
                    {!! Form::open(['route' => ['facturas.destroy', $factura->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facturas.show', [$factura->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('facturas.edit', [$factura->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
