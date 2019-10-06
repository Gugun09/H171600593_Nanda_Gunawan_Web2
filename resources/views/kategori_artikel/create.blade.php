@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Artikel <a href="/kategori_artikel" class="badge badge-warning">Kembali</a></div>
                <div class="card-body">
                <form method="post" action="/kategori_artikel">
                @include('kategori_artikel.form')

@endsection