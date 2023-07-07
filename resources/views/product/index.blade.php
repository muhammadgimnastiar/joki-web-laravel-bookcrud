@extends('layouts.app')
@section('assets')
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Category</h3>
                <table class="table table-borderless table-hover">
                    <thead>

                        <tr>
                        
                              <th scope="col">No</th>
                            <th scope="col"></th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($book as $books)
                            <tr class="align-middle">
                                <td scope="row">{{$i++}}</td>
                                <td><img src="{{ $books->photo}}" class="img-fluid" width="100"></td>
                                <td>{{ $books->title }}</td>
                                <td>{{ $books->writer }}</td>
                                <td>{{ $books->price }}</td>
                            </tr>
                            
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
