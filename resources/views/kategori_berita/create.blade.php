@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Berita <a href="/kategori_berita" class="badge badge-warning">Kembali</a></div>
                <div class="card-body">
                <form method="post" action="/kategori_berita">
                @include('kategori_berita.form')

@endsection