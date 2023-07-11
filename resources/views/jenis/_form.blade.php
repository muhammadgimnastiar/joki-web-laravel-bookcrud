<div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
    {!! Form::label('jenis_buku', 'Jenis Buku') !!}
    {!! Form::text('jenis_buku', null, ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>




{!! Form::submit(isset($model) ? 'Update' : 'Simpan', ['class' => 'btn btn-primary']) !!}
