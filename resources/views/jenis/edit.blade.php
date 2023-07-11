

@extends('layouts.app')
@section('content') 
    <div class="container"> 
    <div class="row">
    <div class="col-md-12">
    <h3>Edit</h3> </div>
    <h2>{{ $jenis->jenis_buku }}</h2>


    
    {!! Form::model($jenis, ['route' => ['jenis.update',
$jenis],'method' =>'patch', 'files' => false])!!}
    @include('jenis._form', ['model' => $jenis])
    {!! Form::close() !!}
    </div>
    </div>
    </div>
@endsection



