<!-- Id Prestamo Field -->
<div class="form-group">
    {!! Form::label('id_prestamo', 'Id Prestamo:') !!}
    <p>{{ $prestamos->id_prestamo }}</p>
</div>

<!-- Fk Id Libro Field -->
<div class="form-group">
    {!! Form::label('fk_id_libro', 'Fk Id Libro:') !!}
    <p>{{ $prestamos->fk_id_libro }}</p>
</div>

<!-- Fecha Prestamo Field -->
<div class="form-group">
    {!! Form::label('fecha_prestamo', 'Fecha Prestamo:') !!}
    <p>{{ $prestamos->fecha_prestamo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $prestamos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $prestamos->updated_at }}</p>
</div>

