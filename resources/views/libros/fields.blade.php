<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Editorial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('editorial', 'Editorial:') !!}
    {!! Form::text('editorial', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_id_cliente', 'Fk Id Cliente:') !!}
    {!! Form::text('fk_id_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('libros.index') }}" class="btn btn-default">Cancel</a>
</div>
