@extends('layouts.app')
@section('assets')
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" /> --}}
@endsection
@section('content')
    <div class="container">
        <div class="row ">
            


            <div class="col-md-12">

                <h3>Identitas Buku <small><a href="{{ route('jenis.create') }}" class="btn btn-warning btn-sm">New
                            Jenis Book</a></small></h3>



                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($jenis as $jenises)
                            <tr class="align-middle">
                                <td scope="row">{{ $i++ }}</td>

                                <td> {{$jenises->jenis_buku }}</td>
                                <td>
                                    

                                    {{-- tombol edit --}}
                                    {!! Form::model($jenises, ['route' => ['jenis.destroy', $jenises], 'method' => 'delete', 'class' => 'form-inline']) !!}
                                    <a href="{{ route('jenis.edit', $jenises->id) }}"
                                        class="btn btn-warning btn-sm my-1">edit</a>&nbsp

                                    {{-- Tombol delete --}}
                                    {!! Form::submit('delete', ['class' => 'btn btn-danger btn-sm ']) !!}

                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection
