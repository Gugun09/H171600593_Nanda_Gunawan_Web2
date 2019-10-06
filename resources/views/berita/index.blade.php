@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Berita</div>
                <div class="card-body">
                <a href="/berita/create" class="btn btn-success">Tambah Data Berita</a>
                <ul class="list-group pt-2">
                @if (session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead class="bg-info">
                        <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $berita as $berita)
                        <tr>
                        <td>{!! $berita->judul !!}</td>
                        <td>{!! $berita->created_at !!}</td>
                        <td>
                            <a href="/berita/{{$berita->id}}" class="badge badge-info">Detail</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </ul>
		@endsection