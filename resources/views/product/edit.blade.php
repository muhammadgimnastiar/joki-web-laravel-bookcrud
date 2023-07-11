@extends('layouts.app')
@section('content') 
    <div class="container"> 
    <div class="row">
    <div class="col-md-12">
    <h3>Edit</h3> </div>
    <h2>{{ $book->title }}</h2>


    
    {!! Form::model($book, ['route' => ['book.update',
$book],'method' =>'patch', 'files' => true])!!}
    @include('product._form', ['model' => $book])
    {!! Form::close() !!}
    </div>
    </div>
    </div>
@endsection