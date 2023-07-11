@extends('layouts.app')
@section('assets')
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" /> --}}
@endsection
@section('content')
    <div class="container">
        <div class="row ">
            
            <div class="col p-4 mb-4">
            {!! Form::open(['url' => 'book', 'method' => 'get', 'class' => 'forminline ']) !!}
            <div class="form-group row {!! $errors->has('q') ? 'has-error' : '' !!}">
                {!! Form::text('q', isset($q) ? $q : null, [
                    'class' => 'form-control col bg-light',
                    'placeholder' => 'Judul Buku..',
                ]) !!}
                {!! $errors->first('q', '<p class="help-block col-4">:message</p>') !!}


                {!! Form::submit('Search', ['class' => 'btn btn-primary col-2 ms-2']) !!}
                {!! Form::close() !!}
            </div>
            </div>


            <div class="col-md-12">

                <h3>Data Produk <small><a href="{{ route('book.create') }}" class="btn btn-warning btn-sm">New
                            Book</a></small></h3>



                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Harga</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($book as $books)
                            <tr class="align-middle">
                                <td scope="row">{{ $i++ }}</td>
                                <td><img src="{{ url('/img/' . $books->photo) }}" class="img-fluid" width="100"></td>
                                <td>{{ $books->title }}</td>
                                <td>{{ $books->writer }}</td>
                                <td>{{ $books->price }}</td>
                                <td>{{ !empty($books->isbn->no_isbn) ? $books->isbn->no_isbn : '-' }}</td>
                                <td> {{$books->jenis->jenis_buku }}</td>
                                <td>
                                    {{-- tombol detail --}}
                                    <a href="{{ route('book.show', $books->id) }}"
                                        class="btn btn-success
                                        btn-sm">Detail</a>
                                    &nbsp;

                                    {{-- tombol edit --}}
                                    {!! Form::model($books, ['route' => ['book.destroy', $books], 'method' => 'delete', 'class' => 'form-inline']) !!}
                                    <a href="{{ route('book.edit', $books->id) }}"
                                        class="btn btn-warning btn-sm my-1">edit</a>&nbsp

                                    {{-- Tombol delete --}}
                                    {!! Form::submit('delete', ['class' => 'btn btn-danger btn-sm ']) !!}{!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $book->appends(compact('q'))->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
