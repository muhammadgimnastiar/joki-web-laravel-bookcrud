@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Tambah Jenis Buku</h3>
{!! Form::open(['route' => 'jenis.store', 'files' => false])!!}
@include('jenis._form')
{!! Form::close() !!}
</div>
</div>
</div>
@endsection



