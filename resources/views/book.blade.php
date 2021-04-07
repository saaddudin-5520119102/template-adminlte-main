@extends('adminlte::page')

@section('title', 'Pengelolaan Buku')

@section('content_header')
    <h1 class="m-0 text-dark">Pengelolaan Buku</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('Pengelolaan Buku') }}</div>
                <div class="card-body">
                    <table id="table-data" class="table table-borderer">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>JUDUL</th>
                                <th>PENULIS</th>
                                <th>TAHUN</th>
                                <th>PENERBIT</th>
                                <th>COVER</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($book as $key => $data )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{{ $data->penulis }}</td>
                                    <td>{{ $data->tahun }}</td>
                                    <td>{{ $data->penerbit }}</td>
                                    <td>
                                        @if ($data->cover !== null)
                                            <img src="{{ asset('storage/cover_buku/'.$data->cover) }}" alt="{{ $data->judul }}">
                                        @else
                                            [Gambar tidak tersedia]
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
