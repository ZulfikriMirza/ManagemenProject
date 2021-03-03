@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/userpage.css') }}">
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

<section class= "contact" id = "contact">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
        <h2 class="text-center"> Page User </h2>
        <hr>
        <br></br>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-4">
        <img src="{{ asset('produkListJasa/bapak.png') }}" class="img-thumbnail">
        <br></br>
        </div>

        <div class="col-sm-8">
        <h3>Informasi User</h3>
        <hr>
    
            <form>
                <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <Input type="text" id="nama" class="form-control" placeholder="masukan nama">
                </div>

                <div class="form-group">
                <label for="email">Email</label>
                <Input type="email" id="email" class="form-control" placeholder="masukan email">
                </div>
                <button type="submit" class="btn btn-primary">Perbarui</button>
            </form>
        </div>
        
        </div>
    </div>
    <br></br>
    <div class="container">

        <div class="row">
        <div class="col-sm-4">
       
        <br></br>
        </div>

        <div class="col-sm-8">
        <h3>Ganti Password</h3>
        <hr>
        
            <form>
                <div class="form-group">
                <label for="nama">Password Lama</label>
                <Input type="text" id="nama" class="form-control" placeholder="masukan password lama">
                </div>

                <div class="form-group">
                <label for="email">Password Baru</label>
                <Input type="email" id="email" class="form-control" placeholder="masukan password baru">
                </div>

                <div class="form-group">
                <label for="email">Konfirmasi Password Baru</label>
                <Input type="email" id="email" class="form-control" placeholder="konfirmasi password baru">
                </div>                
                <button type="submit" class="btn btn-primary">Konfirmasi</button>
                <br></br>
            </form>
        </div>
        
        </div>
    </div>
</section>