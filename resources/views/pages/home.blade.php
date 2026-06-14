@extends('layouts.app')
@section('title','Home')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4 mb-4">Halo, Saya Afif Efendi</h1>
            <img src="https://afif-e.my.id/storage/about/01KJ6JM4456EE46KM16GPJDP4X.png" alt="Afif Efendi" class="img-fluid rounded-circle mb-4" style="width: 200px; height: 200px; object-fit: cover;">
            <p class="lead">
                saya seorang programmer web developer yang passionte dalam membuat aplikasi web modern
            </p>
            <hr class="my-4">
            <p>Selamat datang di profile website saya, saya memiliki pengalaman dalam pengembangan web menggunakan berbagai teknologi modern.</p>
        </div>
    </div>
    <div class="row mt-5 text-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pengalaman</h5>
                    <p class="card-text">2 Tahun Pengalaman</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Project</h5>
                    <p class="card-text">12 Project Selesai</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Klien</h5>
                    <p class="card-text">20 Klien Puas</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection