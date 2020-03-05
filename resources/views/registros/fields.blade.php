<!-- Idfactura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idfactura', 'Idfactura:') !!}
    {!! Form::text('idfactura', null, ['class' => 'form-control']) !!}
</div>

<!-- Idcliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcliente', 'Idcliente:') !!}
    {!! Form::text('idcliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Idproducto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idproducto', 'Idproducto:') !!}
    {!! Form::text('idproducto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('registros.index') }}" class="btn btn-default">Cancel</a>
</div>
