<div class="table-responsive">
    <table class="table" id="registros-table">
        <thead>
            <tr>
                <th>Idfactura</th>
        <th>Idcliente</th>
        <th>Idproducto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($registros as $registro)
            <tr>
                <td>{{ $registro->idfactura }}</td>
            <td>{{ $registro->idcliente }}</td>
            <td>{{ $registro->idproducto }}</td>
                <td>
                    {!! Form::open(['route' => ['registros.destroy', $registro->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('registros.show', [$registro->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('registros.edit', [$registro->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
