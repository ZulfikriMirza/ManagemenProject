@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
@endsection

@section('title','Contact')

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
<div class="container">
  <h1 style="text-align: center">Contact</h1>

  <div style="display: inline-block; margin: 5%; padding: 20px; width: auto; background-color: #f7d4a9; border: 1px solid #666;">
    <img src="foto/interior-cozy-light-living-room-with-deadwood-decoration.jpg" style="width:50%; height:100%; display:inline-block;"><section class="form" style="padding-top: 8%" >
    <div class="container form-card">
      <p>Contact Information</p>
    </div>
    <div class="container form-card-body">
      <br>
      <img src="foto/phone-call.png" style="width: 10%; float: left;">
      <p>+62 896-6331-9099</p>
      <br>
      <img src="foto/gmail.png" style="width: 10%; float: left;">
      <p>udinhajat@gmail.com</p>
      <br>
      <img src="foto/placeholder.png" style="width: 10%; float: left;">
      <p>Largo di Torre Argentina <br> 00186 Roma, Italy</p>
      <br>    
    </div>
  </section>
</div>
</div>

<footer class="container text-center">
  <hr></hr>
  <div class="site-footer-below-section-1 site-footer-section site-footer-section-1">
    <div class="ast-builder-layout-element ast-flex site-footer-focus-item ast-footer-copyright" data-section="section-footer-builder">
      <div class="ast-footer-copyright"><div class="ast-footer-html-inner"><p>Copyright © 2021 - <a href="https://www.2k.com/en-US/" target="_blank">2K Sports</a></p>
      </div>
    </div> 
  </div>
  <div class="footer-widget-area widget-area site-footer-focus-item ast-footer-html-1" data-section="section-fb-html-1">
    <div class="ast-header-html inner-link-style-">
      <div class="ast-builder-html-element"><p>Powered by GFuel</p>
    </div>
  </div> 
</footer>
@endsection