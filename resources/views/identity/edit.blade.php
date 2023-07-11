

@extends('layouts.app')
@section('content') 
    <div class="container"> 
    <div class="row">
    <div class="col-md-12">
    <h3>Edit</h3> </div>
    <h2>{{ $identity->nama_identity }}</h2>


    
    {!! Form::model($identity, ['route' => ['identity.update',
$identity],'method' =>'patch', 'files' => false])!!}
    @include('identity._form', ['model' => $identity])
    {!! Form::close() !!}
    </div>
    </div>
    </div>
@endsection



