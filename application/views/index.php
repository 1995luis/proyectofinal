<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>hotel </title>
    <link rel=StyleSheet href="style.css" type="css/style.css">
    <link rel="stylesheet" href="<?php  echo base_url().'css/style.css'?>">
    </head>
  
  <body id="bod">
  
  <header id="head">

<h1 style="text-align: center; " id="h1"> 

<form id="cuadro" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="buscar" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>

      <nav class="navbar navbar-expand-lg ">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          sucursales
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <ul>
          <a class="dropdown-item" href="#">Medellin</a>
          <a class="dropdown-item" href="#">cali </a>
          <a class="dropdown-item" href="#">cartagena</a>
        </div>
      </ul>
      </li>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          habitaciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">vista al mar </a>
          <a class="dropdown-item" href="#">doble cama</a>
          <a class="dropdown-item" href="#">dfdfdfdf</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contactos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="#">3122334444</a>
          <a class="dropdown-item" href="#">232323232323</a>
      </li>
    </ul>
    
 
</nav>

</h1>
</div>
</form>
<a href="<?php echo base_url().'index.php/hotel/cargarS' ?>" class=" w3-button " >
<img id="img" src="<?php echo base_url().'imagenes/logo2.png'?>"width="140" height="150">
</a>



   
<a href="<?php echo base_url().'index.php/hotel/contact'?>"><svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-telephone-inbound" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.47 16.47 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.471 17.471 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/>
</svg></a>

  <a href="<?php echo base_url().'index.php/hotel/registro'?>"><svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg></a>
</header>
<!-- portada-->

<!--contenedor  video -->
   <div class="container col-sm-4 col-md-6 col-lg-12">
    <br><br>
    <center>
  <p id="p"> 
    
  Medellin, es un Destino privilegiado, situado en el Departamento de antioquia, al sur de Colombia,donde opera el aeropuerto Benito Salas y a los costados de ciudades como Popayán, Cauca (120 Kilómetros); Florencia ( Caquetá) y Mocoa (Putumayo), ciudades donde igualmente hay aeropuertos.  
  La especialidad de este bello destino, por su riqueza arqueológica, es Historia y Cultura; sin embargo por estar situado en pleno Macizo Colombiano Andino, ofrece a los visitantes una riqueza paisajística biodiversa inigualable, con grandes potencialidades y atractivos para el turismo de naturaleza y aventura.</p>
  
  <iframe  width="560" height="315"  src="<?php echo base_url().'videos/hostal.mp4'?> " frameborder="0"></iframe>
  </div>
  </center>
 <!--contenedor de imagen  -->
<div class="container col-sm-4 col-md-6 col-lg-12">
<p id="p">Nosotros ofrecemos a nuestros huéspedes, confortable instalaciones Hoteleras, con habitaciones bellas y acogedoras, que cuentan con televisor, agua caliente, su baño privado, y las camas, con las especificaciones que manda la Hotelería.</p>
<br>
    <img id="" src="https://www.gsnoticias.com/wp-content/uploads/2019/08/Hoteles-en-el-mar-.jpg">
    <br><br>
  
    <h1>Así es el protocolo anti-Covid para garantizar 
     <br> la seguridad en los Hoteles</h1>
<!--contenedor de imagen y video -->
<br>
<div>
<ul>
</div>

 <div class="container col-sm-4 col-md-6 col-lg-12">


  
  <p id="p">Mediante la resolución 1346 de 2020 se adoptó el protocolo de bioseguridad para el manejo y control del riesgo del coronavirus COVID-19 en los estableciminetos publicos y privados y otras pruebas que realiza el Instituto Colombiano .</p><br><br>
  <img src="<?php echo base_url().'imagenes/tapabocas.jpg'?>" width="300" height="315"class="rounded float-right" alt="...">

<div>
  <br><br>
<ul>
<h1>INGRESO AL HOTEL</h1>
 <li>Toda persona que ingrese al hotel deberá cumplir con los siguientes procesos:</li><br>
    
  <li>Pasar por el Tapete Desinfectante. En caso de llevar maletas con ruedas, se deben rodar por el tapete.</li>
  <li>Todo lo que lleve consigo como bolsos, maletas, paquetes etc. deberá ser desinfectado al ingresar al hotel.</li>
  <li>Deberá llevar colocado el tapabocas. En caso de no tenerlo, le suministraremos uno.</li>
  <li>Someterse al control de toma de temperatura. Si alguien presenta síntomas 
    <br> de gripa o cuadros de fiebre mayor o igual a 38°C.deberá someterse a una evaluación de salud</li>

</ul>
</div>
<br><br><br>
<div class="container col-sm-4 col-md-6 col-lg-12">
 <div class="wrap">
    <div class="tarjeta-wrap">
      <div class="tarjeta">
        <div class="adelante card1"></div>
          <div class="atras">
           <p>Implementamos una serie de protocolos para la prevención de la transmisión del COVID-19, en donde se destaca la identificación de necesidades, la puesta en marcha de métodos y sistemas, la adecuación de infraestructura y la capacitación del personal. Además, desarrollamos protocolos para la gestión de riesgos y el manejo de posibles emergencias. Estos protocolos están disponibles para todos los huéspedes y visitantes en código QR en cada lobby de nuestros hoteles</p> 

        </div>
   </div>
</div>
<div class="tarjeta-wrap">
      <div class="tarjeta">
        <div class="adelante card2"></div>
          <div class="atras">
           <p>Implementamos una serie de protocolos para la prevención de la transmisión del COVID-19, en donde se destaca la identificación de necesidades, la puesta en marcha de métodos y sistemas, la adecuación de infraestructura y la capacitación del personal. Además, desarrollamos protocolos para la gestión de riesgos y el manejo de posibles emergencias. Estos protocolos están disponibles para todos los huéspedes y visitantes en código QR en cada lobby de nuestros hoteles</p> 

        </div>
     </div>
</div>
    <div class="tarjeta-wrap">
      <div class="tarjeta">
        <div class="adelante card3"></div>
          <div class="atras">
           <p>Implementamos una serie de protocolos para la prevención de la transmisión del COVID-19, en donde se destaca la identificación de necesidades, la puesta en marcha de métodos y sistemas, la adecuación de infraestructura y la capacitación del personal. Además, desarrollamos protocolos para la gestión de riesgos y el manejo de posibles emergencias. Estos protocolos están disponibles para todos los huéspedes y visitantes en código QR en cada lobby de nuestros hoteles</p> 

        </div>
   </div>
</div>
</div>
</div>

 <p id="p">Implementamos una serie de protocolos para la prevención de la transmisión del COVID-19, en donde se destaca la identificación de necesidades, la puesta en marcha de métodos y sistemas, la adecuación de infraestructura y la capacitación del personal. Además, desarrollamos protocolos para la gestión de riesgos y el manejo de posibles emergencias. Estos protocolos están disponibles para todos los huéspedes y visitantes en código QR en cada lobby de nuestros hoteles

Utilizamos únicamente detergentes y desinfectantes aprobados por la EPA (U.S. Environment Protection Agency) como efectivos para el control del COVID-19 y métodos de desinfección recomendados por las principales agencias de salud, protección y bioseguridad.</p>
<br>
<div class="wrap">
<div class="tarjeta-wrap">
      <div class="tarjeta">
        <div class="adelante card4"></div>
          <div class="atras card6">

        </div>
      </div>
      </div>
      <div class="tarjeta-wrap">
      <div class="tarjeta">
        <div class="adelante card5"></div>
          <div class="atras card7">

        </div>
     </div>
</div>
</div>
</div>
<div>

  <p id="p">La seguridad de nuestros huéspedes y de todo el equipo que conforma la familia de EE Hoteles es la mayor prioridad que tenemos. A través de toda nuestra historia, una de las mayores fortalezas que los clientes han valorado como tal, son los niveles de limpieza y de higiene que ofrecemos. Esto lo logramos a través de procesos con exigentes estándares de aseo. Debido a los riesgos asociados con el COVID 19 y siguiendo las pautas que han establecido, tanto la Organización Mundial de la Salud, como el Gobierno de Colombia, hemos realizado una serie de medidas adicionales para reforzar los procesos de desinfección en todos nuestros hoteles. Dentro de estas, vale la pena destacar las siguientes:.</p>
  </div>
</div>

<!--contenedor portada -->

<p id="p">La historia de los hoteles y la industria de la hospitalidad se han evidenciado ya desde los tiempos de Jesucristo, cuando María y José llegaron a Belén durante el censo. A medida que la Biblia describe, María y José se les negó alojamiento porque “no había sitio en la posada.” Desde el principio del tiempo, la gente ha viajado para el comercio, la religión, familia, salud, inmigración, educación y recreación.</p>

</div>
</div>
<!--contenenedor de la pie de paguni -->

   <footer>
       <div class="container-footer-all">

    <div class="container-body"> 

        <div class="column1">
            <h1>Mas información de nuestra compañia</h1>

            <p id="">
                Es un sitio web líder en reservación de hospedaje en línea. Nos apasiona viajar. 
                Todos los días inspiramos y llegamos a millones de personas gracias a nuestros 90 sitios web locales en 41 idiomas. Por eso, cuando se trata de reservar los mejores hoteles, alquileres vacacionales, resorts, departamentos, 
            </p>
        </div>
        
 <div class="column2">
    <div class="row">
      
       <a href="https://www.facebook.com/Hotel-Real-101140105059474"><img src="<?php echo base_url().'imagenes/face1.png'?>"></a> 
        <label> Siguenos en Facebook</label>
    </div>

    <div class="row">
        <a href="https://www.google.es/"><img src="<?php echo base_url().'imagenes/goo1.png'?>"></a>
        <label> Siguenos en Google</label>
    </div>

   <div class="row">
    <a href="https://www.instagram.com/?hl=es-la"><img src="<?php echo base_url().'imagenes/c4.png'?>"></a> 
        <label> Siguenos en Instagram</label>
    </div>

    <div class="row">
        <a href="https://twitter.com/?logout=1598331123094"><img src="<?php echo base_url().'imagenes/twiter.png'?>"></a>
        <label> Siguenos en Twitter</label>
    </div>


 </div>

 <div class="column3">

    <h1>Informacion Contactos</h1>

    <div class="row2">
       <a href="https://www.google.com/maps/place/Cra.+50a+%23102-91+a+102-1,+Medell%C3%ADn,+Antioquia/@6.2937945,-75.557971,185m/data=!3m2!1e3!4b1!4m5!3m4!1s0x8e442f33f0576b21:0x3a58eaf2fc4fc1c!8m2!3d6.2937932!4d-75.5574238!5m1!1e4?hl=es">
       <img src="<?php echo base_url().'imagenes/simpor.png'?>"></a> 
        <label>Medellin-Antioquia <br> Colombia <br>Cra. 50a #102-91 a 102-1</label>
    </div>

    <div class="row2">
        <img src="<?php echo base_url().'imagenes/c6.png'?>">
        <label>+57 325 323 6558</label>
    </div>

    <div class="row2">
        <img src="<?php echo base_url().'imagenes/c7.png'?>">
        <label>kmarlhistory@gmail.com</label>
    </div>

 </div>

 
</div>
<br>
<hr>
<div class="container-footer">
    <div class="copyright">
         <a href="https://www.copyright.gov/"> ©™ 2020 | Todos los derechos reservados</a> 
    </div>
    
    <div class="information">
        <a href="">Informacion Compañia |</a>
        <a href="">Privacidad & Politica |</a>
        <a href="">Terminos & Condiciones </a>
    </div>
    </div>

</div>
   </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <?php isset($mg) ? $msg: ''?>
  </body>
</html>