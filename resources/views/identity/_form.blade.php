<div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
    {!! Form::label('nama_identity', 'Identitas Buku') !!}
    {!! Form::text('nama_identity', null, ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>




{!! Form::submit(isset($model) ? 'Update' : 'Simpan', ['class' => 'btn btn-primary']) !!}
