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
      .btn-violeta-suave{
        background-color:#b591f9;
        border-color:#FFCC00;
      }
      mark{
        background-color:#845EC2;
        border-color:#845EC2;
      }
      .btn-violeta-suave:hover{
        background-color:#fff;
        border-color:#fff;
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
      .ver:hover{
        color:#FFCC00 !important;
      }
      .border-amarillo{
        border-style: solid;
        border-color: #FFCC00;
        border-width: 2px;
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
<section id="banner" class="banner p-4" style="height: 100%;">
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
      <div class="col-md-4 col-sm-12">
      <button class="btn btn-outline-success btn-violeta-suave btn-lg text-amarillo " type="submit">Vender</button>
      </div>
      <div class="col-md-4 col-sm-12">
      <button class="btn btn-outline-success btn-amarillo text-violeta btn-lg" type="submit">Comprar</button>

      </div> 
     </div>
</div>
</section>
<section id="descubrimiento" class="descubrimiento p-3">
<div class="container">
  <div class="row">
    <div class="col-10">
      <h4 class="text-violeta"> Descubrimiento semanal </h4>
    </div>
    <div class="col">
      <a href="#" class="text-violeta nav-link ver"> Ver Más > </a>
    </div>
  </div>
  <div class="row">
    <div class="col text-center"><img class="text-center border-amarillo"  src="{{asset('/img/carroejemplo.jpg')}}" width="75%" alt=""><h5 class="text-violeta">Suzuki Alto</h5><p class="text-violeta">2020</p></div>
    <div class="col text-center"><img class="text-center border-amarillo"  src="{{asset('/img/carroejemplo.jpg')}}" width="75%" alt=""><h5 class="text-violeta">Mazda </h5><span class="text-violeta"> 2010</span></div>
    <div class="col text-center"><img class="text-center border-amarillo"  src="{{asset('/img/carroejemplo.jpg')}}" width="75%" alt=""><h5 class="text-violeta">Toyota Agia</h5><span class="text-violeta">2012</span></div>
    <div class="col text-center"><img class="text-center border-amarillo"  src="{{asset('/img/carroejemplo.jpg')}}" width="75%" alt=""><h5 class="text-violeta">Suzuki Jinmy</h5><span class="text-violeta">2018</span></div>
  </div><br>
  <div class="row">
    <div class="col">
    <h4 class="text-center text-violeta"> ¿Cómo hago mi compra financiada?</h4>
    </div>
  </div> <br>
  <div class="row d-flex ">
    <div class="col text-center"><img src="{{asset('/img/icono1.png')}}" width="50%" alt=""><h4 class="text-amarillo"> 1.<span class="text-violeta">Busca el carro que te guste</span></h4></div>
    <div class="col text-center"><img src="{{asset('/img/icono2.png')}}" width="50%" alt=""><h4 class="text-amarillo"> 2.<span class="text-violeta">Precalifica</span></h4></div>
    <div class="col text-center"><img src="{{asset('/img/icono3.png')}}" width="50%" alt=""><h4 class="text-amarillo"> 3.<span class="text-violeta">Agenda Cita</span></h4></div>
  </div>
</div>
</section>
<div class="card  text-white">
  <img class="card-img" src="{{asset('/img/paso4.png')}}" alt="Card image">
  <div class="card-img-overlay">
  <h3 class="display-4 card-title text-center text-amarillo"> 4.<span class="text-white">¡Disfruta tu nuevo carro!</span></h3>

  </div>
</div>
<section id="interes" class="interes p-3">
<div class="container">
  <div class="row">
    <div class="col-10">
      <h4 class="text-violeta"> Te podría interesar</h4>
    </div>
    <div class="col">
      <a href="#" class="text-violeta nav-link ver"> Ver Más > </a>
    </div>
  </div>
  <div class="row">
    <div class="col text-center"><img class="text-center border-amarillo" src="{{asset('/img/carroejemplo.jpg')}}" width="75%" alt=""><h5 class="text-violeta">Suzuki Alto</h5><p class="text-violeta">2020</p></div>
    <div class="col text-center"><img class="text-center border-amarillo" src="{{asset('/img/carroejemplo.jpg')}}" width="75%" alt=""><h5 class="text-violeta">Mazda </h5><span class="text-violeta"> 2010</span></div>
    <div class="col text-center"><img class="text-center border-amarillo" src="{{asset('/img/carroejemplo.jpg')}}" width="75%" alt=""><h5 class="text-violeta">Toyota Agia</h5><span class="text-violeta">2012</span></div>
    <div class="col text-center"><img class="text-center border-amarillo" src="{{asset('/img/carroejemplo.jpg')}}" width="75%" alt=""><h5 class="text-violeta">Suzuki Jinmy</h5><span class="text-violeta">2018</span></div>
  </div>
</div>
</section>
<div class="card  text-white ">
  <img class="card-img" src="{{asset('/img/fondo2.png')}}" alt="Card image">
  <div class="card-img-overlay align-middle" >
  <h3 class=" card-title text-center text-white align-middle">Que el financiamiento no sea un problema <br> para adquirir tu nuevo carro</h3><br>
  <h3 class="  text-center text-amarillo"><mark class="text-amarillo">Cotiza y compra en Cotizapp Cars</mark></h3>
  </div>
</div>
<br>
<section id="footer" class="footer p-3 bg-violeta">
<div class="container">
  <div class="row">
    <div class="col">
      <p class="text-amarillo">¿Necesitas ayuda?</p>
      <ul class="text-amarillo">
        <li>Preguntas Frecuentes</li>
        <li>info@cotizapp.com</li>
      </ul>
    </div>
    <div class="col">
    <p class="text-amarillo">Redes Sociales</p>
    <ul class="text-amarillo">
        <li>Facebook</li>
        <li>Instagram</li>
      </ul>    </div>
  </div>
  <div class="row">
  <span class=" text-center text-amarillo">Cotizapp 2021</span>

</div>
</div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>