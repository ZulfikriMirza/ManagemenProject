@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/showcase.css') }}">
@endsection

@section('title','Showcase')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <a class="navbar-brand" href="#">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<main>
    <div class="container">
        <h1>SHOWCASE FOR OUR WORK !</h1>
    </div>
</main>

<div class="page1">
    <div class="container text-center">
        <div class="row service">
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0003_Arsitektur-Bangunan.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Residential Architecture</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Books Photography</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Commercial Architecture</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Exhibitions</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0002_Desain_Furniture.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Furniture Design</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0003_Arsitektur-Bangunan.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Residential Architecture</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Commercial Architecture</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Product Design</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection