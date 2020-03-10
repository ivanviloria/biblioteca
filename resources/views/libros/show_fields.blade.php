<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $libros->id }}</p>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{{ $libros->titulo }}</p>
</div>

<!-- Editorial Field -->
<div class="form-group">
    {!! Form::label('editorial', 'Editorial:') !!}
    <p>{{ $libros->editorial }}</p>
</div>

<!-- Fk Id Cliente Field -->
<div class="form-group">
    {!! Form::label('fk_id_cliente', 'Fk Id Cliente:') !!}
    <p>{{ $libros->fk_id_cliente }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $libros->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $libros->updated_at }}</p>
</div>

