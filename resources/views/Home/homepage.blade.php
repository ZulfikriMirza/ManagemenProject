@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/homepage.css') }}">
@endsection

@section('title','Home')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <a class="navbar-brand" href="#">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
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
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            
        </ul>
    </div>
</nav>

<div class="jumbotron">
	<img class= "img-circle" src="{{ asset('produkListJasa/bapak.png') }}">
    <h1> udin hajat</h1>
    <p>maker of the opera house and many more</p>
</div>

<section class= "work" id = "work">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
        <h2 class="text-center"> Recent Works </h2>
        <hr>
        <br></br>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-4">
        <img src="{{ asset('produkListJasa/home1.png') }}" class="img-thumbnail">
        <br></br>
        </div>

        <div class="col-sm-8">
        <h3>Kategori </h3>
        <h3>judul</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Fugiat vero, aperiam voluptates sapiente quasi quaerat molestiae,
        beatae omnis mollitia aliquid nobis? Eveniet nulla aliquid perferendis
        illum excepturi fugiat maxime ipsum?</p>
        <a href="www.google.com/">Pelajari Lebih Lanjut</a>
        <div>
        
        </div>
    </div>
    <br></br>
    <div class="container">
        

        <div class="row">
        <div class="col-sm-4">
        <img src="{{ asset('produkListJasa/home1.png') }}" class="img-thumbnail">
        <br></br>
        </div>

        <div class="col-sm-8">
        <h3>Kategori </h3>
        <h3>judul</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Fugiat vero, aperiam voluptates sapiente quasi quaerat molestiae,
        beatae omnis mollitia aliquid nobis? Eveniet nulla aliquid perferendis
        illum excepturi fugiat maxime ipsum?</p>
        <a href="www.google.com/">Pelajari Lebih Lanjut</a>
        <div>
        
        </div>
    </div>
    <br></br>
    <div class="container">
        

        <div class="row">
        <div class="col-sm-4">
        <img src="{{ asset('produkListJasa/home1.png') }}" class="img-thumbnail">
        <br></br>
        </div>

        <div class="col-sm-8">
        <h3>Kategori </h3>
        <h3>judul</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Fugiat vero, aperiam voluptates sapiente quasi quaerat molestiae,
        beatae omnis mollitia aliquid nobis? Eveniet nulla aliquid perferendis
        illum excepturi fugiat maxime ipsum?</p>
        <a href="www.google.com/">Pelajari Lebih Lanjut</a>
        <div>
        
        </div>
    </div>

</section>



<footer>
    <div class="container">
        <div class="row">
        <h2>footer</h2>
        </div>
    </div>
</footer>