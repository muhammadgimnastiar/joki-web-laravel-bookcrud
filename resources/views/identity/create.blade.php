@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Tambah Identitas Buku</h3>
{!! Form::open(['route' => 'identity.store', 'files' => false])!!}
@include('identity._form')
{!! Form::close() !!}
</div>
</div>
</div>
@endsection



