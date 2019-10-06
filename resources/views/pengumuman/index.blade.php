@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Pengumuman</div>
                <div class="card-body">
                <a href="/pengumuman/create" class="btn btn-success">Tambah Data Pengumuman</a>
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
                        @foreach( $pengumuman as $pengumuman)
                        <tr>
                        <td>{!! $pengumuman->judul !!}</td>
                        <td>{!! $pengumuman->created_at !!}</td>
                        <td>
                            <a href="/pengumuman/{{$pengumuman->id}}" class="badge badge-info">Detail</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </ul>
		@endsection