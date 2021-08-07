<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COTIZAPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
      .bg-violeta{
        background-color:#845EC2;
      }
      .text-amarillo{
        color: #FFCC00 !important;
      }
      .text-violeta{
        color: #845EC2 !important;
      }
      .btn-amarillo{
        background-color:#FFCC00;
        border-color:#FFCC00;
      }
      .btn-amarillo:hover{
        background-color:#fff;
        border-color:#fff;
      }
      .nav-link:hover{
        color: #fff !important;
      }
      .border-down{
        border-bottom-style: solid;
        border-bottom-color: #FFCC00;
        border-bottom-width: 5px;
      }
      .banner{
        background-image: url("{{asset('/img/banner.png')}}")   ;
        background-repeat:no-repeat;
        background-size: 100%;
      }
      .busqueda{
        background-color : #b591f9 !important; 
        border-color:#b591f9;
        border-top-left-radius:45px;
        border-bottom-left-radius:45px;
        
      }
      .btn-busqueda{
        border-top-right-radius:45px;
        border-bottom-right-radius:45px;
      }
    </style>
    <script src="https://kit.fontawesome.com/2a5eeeb7ec.js" crossorigin="anonymous"></script>
  </head>
<body>     
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-violeta border-down">
<div class="container-fluid">
    <a class="navbar-brand "><img src="{{asset('/img/logo.png')}}" alt="" height="100px"></a>
    <form class="d-flex">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-amarillo" aria-current="page" href="#">Iniciar Sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-amarillo" href="#">Quiero Vender</a>
        </li>
      </ul>
    </form>
  </div>
</nav>
<section id="espacio" style="height: 125px; background-color: rgba(255,0,0,0.1);">
</section>
<section id="banner" class="banner" style="height: 100vh;">
<div class="container">
<div class="row"><br>
    </div>
  <div class="row">
    <div class="col"></div>
    <div class="col-md-6 col-sm-12">
  <form class=" d-flex "  >
        <input class="form-control form-control-lg me-0 busqueda border-down " type="search"  aria-label="Search">
        <button class="btn btn-outline-success btn-amarillo btn-busqueda" type="submit"><i class="fas fa-search text-violeta"></i></button>
  </form>  
  </div>
  <div class="col"></div>
  </div>
  <div class="row">
  <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link text-amarillo" aria-current="page" href="#">¿Cómo Funciona?</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-amarillo" href="#">Vender</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-amarillo" href="#">Políticas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-amarillo" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
    </div>
    <div class="row">
    <div class="col-md-6 col-sm-12">
      <h1 class="text-amarillo display-2">Cotiza y compra fácil <br> tu nuevo carro</h1>
    </div>
    <div class="col"></div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
      <p class="nav-link text-amarillo">Quiero vender mi carro</p>
      <button class="btn btn-outline-success btn-amarillo " type="submit">Vender</button>
      </div>
      <div class="col-md-4 col-sm-6">
      <p class="nav-link text-amarillo" >Quiero comprar un carro</p>
      <button class="btn btn-outline-success btn-amarillo" type="submit">Comprar</button>

      </div> 
     </div>
</div>
</section>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>