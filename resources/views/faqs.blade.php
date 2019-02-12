<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/faqs.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="icon" href="img/log.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SREF</title>
</head>
<body>
    <header>
        
        <nav style="background: #1c2454; " class="">
            <div class="nav-wrapper" class="font  ">
             <a href="/"><img src="img/logo.png" alt="" class="logo"></a>
              

              <div class="btn-group right hidden" style="margin-top:20p; margin-right:25px;">
                  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #50d8af; margin-top:10px;">
                      Menú
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <ul class=" ">
                     <li> <a href="/#servicios"class="dropdown-item" ><i class="fa fa-wrench" style="font-size:24px"></i></a></li>
                     <li> <a href="/#somos"class="dropdown-item" ><i class="fa fa-users" style="font-size:24px"></i></i></a></li>
                     <li> <a href="/#patrocinadores"class="dropdown-item" ><i class="fa fa-handshake" style="font-size:24px"></i></a></li>
                     <li> <a href="{{url('contact')}}"class="dropdown-item" ><i class="fa fa-phone" style="font-size:24px"></i></a></li>
                     <li> <a href="{{url('faqs')}}"class="dropdown-item" ><i class="fa fa-question" style="font-size:24px"></i></a></li>
                    </ul>
                  
                  </div>
                </div>

              <ul id="nav-mobile" class="right hide-on-med-and-down ">
                <li><a href="/#servicios" class="visible">Servicios</a></li>
                <li><a href="/#somos" class="visible">¿Quiénes somos?</a></li>
                <li><a href="/#patrocinadores" class="visible">Patrocinadores</a></li>
                <li><a href="{{url('contact')}}" class="visible">Contactanos</a></li>
                <li><a href="{{url('faqs')}}" class="visible"><i class="fa fa-question-circle" style="font-size:24px"></i></a></li>
              </ul>
            </div>
          </nav> 

              
    </header>
    
    <div class="social-bar">
        <a href="{{url('contact')}}" class="icon icon-instagram" target="_blank"><i class="fa fa-phone" style="font-size:24px"></i></a>
        <a href="https://www.facebook.com/armandodzulcab" class="icon icon-facebook" target="_blank"><i class="fa fa-facebook" style="font-size:24px"></i></a>
        <a href="https://twitter.com/AlanFRNava1" class="icon icon-twitter" target="_blank"><i class="fa fa-twitter" style="font-size:24px"></i></a>
          <a href=""></a>
      </div>
    <h1 id="titu">Preguntas frecuentes</h1>
    <div id="general">
        <div id="gen2">
            <h3 id="h2">¿Los servicios que ofrecen son a nivel nacional?</h3>
                <p>Sí, todos los servicios con los que contamos pueden llegar a cualquier lugar de la republica Mexicana.</p>
        </div>
        <div id="gen2">
            <h3 id="h2">¿Necesito una cuenta en el sitio web para solicitar algun servicio?</h3>
                <p>No, sólo es necesario ponerse en contacto con nosotros.</p>
        </div>
        <div id="gen2">
            <h3 id="h2">¿Puedo solicitar un servicio personalizado?</h3>
            <p>Sí, sólo tiene que comunicarce con nosotros.</p>
        </div>
        <div id="gen2">
            <h3 id="h2">¿Cómo puedo comunicarme con la empresa?</h3>
            <p>para ponerse en contacto con la empresa, de click en este enlace -> <a href="{{url('contact')}}">Contáctanos</a></p>
        </div>
        <div id="gen2">
            <h3 id="h2">¿Cuentan con sucursales en alguna ciudad de la republica?</h3>
            <p>No, por ahora no contamos con ninguna sucursal en el pais.</p>
        </div>
        <div id="gen2">
            <h3 id="h2">¿Cómo puedo acceder al apartado de preguntas frecuentes?</h3>
            <p>Para ir a preguntas frecuentes de click en este enlace -> <a href="#">Preguntas frecuentes</a></p>
        </div>
    </div>
    <footer class="page-footer bg foot" style="background: #1c2454 !important">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Ubicación</h5>
              <p class="grey-text text-lighten-4" style="margin-bottom: 20px;">Villas II, Puerto Morelos <br> Mz. 20 Lt. 08</p>
              <a href="{{url('contact')}}"  target="_blank"><i class="fa fa-phone" style="font-size:24px; margin-right: 30px; color:white"></i></a>
              <a href="https://www.facebook.com/armandodzulcab"  target="_blank"><i class="fa fa-facebook" style=" font-size:24px; margin-right: 30px; color:white"></i></a>
              <a href="https://twitter.com/AlanFRNava1" target="_blank"><i class="fa fa-twitter" style=" font-size:24px; color:white"></i></a>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Información</h5>
              <ul>
                <li><a class="grey-text text-lighten-3 li-f"  href="/#servicios">Servicios</a></li>
                <li><a class="grey-text text-lighten-3 li-f"  href="/#somos">¿Quiénes somos?</a></li>
                <li><a class="grey-text text-lighten-3 li-f"  href="/#patrocinadores">Patrocinadores</a></li>
                <li><a href="{{url('contact')}}" class="grey-text text-lighten-3 li-f">Contáctanos</a></li>
                <li><a class="grey-text text-lighten-3 li-f"  href="#">FAQS</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2019 AAA 
          </div>
        </div>
      </footer>
</body>

</html>