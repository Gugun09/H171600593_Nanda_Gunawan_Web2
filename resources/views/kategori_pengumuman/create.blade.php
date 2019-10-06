@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Pengumuman <a href="/kategori_pengumuman" class="badge badge-warning">Kembali</a></div>
                <div class="card-body">
                <form method="post" action="/kategori_pengumuman">
                @include('kategori_pengumuman.form')

@endsection