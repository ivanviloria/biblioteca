<!-- Fk Id Libro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_id_libro', 'Fk Id Libro:') !!}
    {!! Form::text('fk_id_libro', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Prestamo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_prestamo', 'Fecha Prestamo:') !!}
    {!! Form::text('fecha_prestamo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('prestamos.index') }}" class="btn btn-default">Cancel</a>
</div>
