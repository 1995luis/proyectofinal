<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php  echo base_url().'css/style.css'?>">
    
    <title>Informacion del Hotel</title>
</head>

<body class="body">
  <div>
    <div>   <!-- baner de bootstrap   /     LOGO Hotel Real -->
      <nav id="baner"class="navbar navbar-expand-lg">
        <a id="baner1" class="navbar-brand" href="index">HOTEL REAL</a>  
      
  <img src="<?php echo base_url().'imagenes/logo2.png'?>"width="90" height="90"   alt="">

        <!--   Item    /    Conexion con Luis inicio   -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>      
          <div class="nav justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Telefonos</a>
              
              <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                <div> <!-- Mensaje emergente     /  ciudades con los telefonos   -->
                <section id="contenedor" class="text-center">
                  <a href="javascript: abrir()">Medellin</a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript: abrir()">Bucaramanga</a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript: abrir()">Cali</a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript: abrir()">Peñol</a>
                  <div class="dropdown-divider"></div>
          
                </section>

                
                </div>

              </div>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="hotel.html">registro</a>      <!--   Item    /    Conexion con yulitza Contactos  -->
            </li>
          </ul>
        </div>
      </nav> 
    </div>

    <div class="container">         <!--   Contenido     /    imagenes y la informacion   -->
      <div>
        <div class="row p-3 mb-5">
          <div class="col-sm-3 .col-md-6 .col-lg-9">
            <div class="shadow-lg p-3 mb-5 bg-bark rounded">Medellin San Fernando Plaza</div>
            <img id="imagenes" src="<?php echo base_url().'imagenes/hotel-san-fernando-plaza1.jpg'?>" class="rounded-circle  mx-auto d-block" alt="img">
            
            <br><br>
            <p>El Hotel San Fernando Plaza ofrece alojamiento lujoso con una piscina climatizada al aire libre, instalaciones de spa y centro de fitness en Medellín, en el distrito financiero y comercial. Además alberga un bar y un restaurante.
            </p>  
            <br> 
            <h4 class="text-center">Descripcion</h4>  
            <br>
            <p>Las habitaciones están equipadas, sirve un desayuno buffet todas las mañanas, también hay aparcamiento privado gratuito con centro de negocios y recepción 24 horas, el pueblito Paisa está a 12 km.</p><br>
              <center>
                 <button id="button1" type="button" class="bg-ling"><a href="<?php echo base_url().'index.php/hotel/habit' ?>" >Reserva</a></button>   <!--   Botones    /    Conexion con Laura Habitaciones  -->
              </center>    
            </div>
            <div class="col-sm-3 .col-md-6 .col-lg-9">
            <div class="shadow-lg p-3 mb-5 bg-bark rounded">Bucaramanga Hotel Serrania</div>
            <img id="imagenes" src="<?php echo base_url().'imagenes/bucaramanga.png'?>" class="rounded-circle" alt="img">
            <br><br><br>
            <p> Ofrece vistas a la ciudad de bucaramanga, a 9 km del parque, un hotel de 3 estrellas dispone de salón compartido y habitaciones con aire acondicionado, WiFi gratuita y baño privado. El establecimiento es hipoalergénico.</p> 
            <br>
            <h4 class="text-center">Descripcion</h4>  
            <br>
            <p>Las habitaciones están decoradas hermoso muebles de madera cama matrimonial, recepción 24 horas ofrece alojamiento con restaurante, aparcamiento privado gratuito</p><br><br>
             <center>
              <button id="button1" type="button"><a href="index.php/hotel/habit" >Reserva</a></button>       <!--   Botones    /    Conexion con Laura Habitaciones  -->
             </center>
               
            </div>
            <div class="col-sm-3 .col-md-6 .col-lg-9">
            <div class="shadow-lg p-3 mb-5 bg-bark rounded">Cali La Esperanza</div>
            <img id="imagenes" src="<?php echo base_url().'imagenes/cali.jpg'?>"class="rounded-circle" alt="img">
            <br><br><br>
            <p>Te ofrecemos alojamiento lujoso con una piscina, instalaciones de spa y Además alberga un bar y un restaurante disponibles las 24 horas</p>
            <br><br><br> 
            <h4 class="text-center">Descripcion</h4>  
            <br>
            <p>Las habitaciones están decoradas con baldosa testurizada hermosos muebles de madera cama matrimonial, cuenta con minibar personalizado y bebidas de diferentes estilos, un gran ventanal con vistas a la ciudad.</p><br>
              <center>
              <button id="button1" type="button"><a href="<?php echo base_url().'index.php/hotel/habit' ?>" >Reserva</a></button>     <!--   Botones    /    Conexion con Laura Habitaciones  -->
              </center>
           </div>
           <div class="col-sm-3 .col-md-6 .col-lg-9">
            <div class="shadow-lg p-3 mb-5 bg-bark rounded">Peñol San Juan</div>
            <img id="imagenes" src="<?php echo base_url().'imagenes/Peñol1.jpg'?>"class="rounded-circle" alt="img">
            <br><br><br>
            <p>El Peñol, en la región de Antioquia, cerca de Piedra del Peñol, y ofrece alojamiento con aparcamiento privado gratuit Los alojamientos cuentan con suelo de baldosa, cocina totalmente equipada con nevera, zona de comedo</p>
            <br> 
            <h4 class="text-center">Descripcion</h4>  
            <br>    
            <p>Se encuentra a 12 km de Piedra del Peñol, y ofrece alojamiento con restaurante, aparcamiento privado gratuito, bar y jardín. Cuenta con recepción 24 horas, servicio de habitaciones y WiFi gratuita en todas las instalaciones.</p><br>
              <center>
              <button id="button1" type="button"><a href="<?php echo base_url().'index.php/hotel/habit' ?>" >Reserva</a></button>   <!--   Botones    /    Conexion con Laura Habitaciones  -->  
              </center>  

            <div class="emergente" id="emer">     <!--  /    Mensaje Emergente del baner-->
               Bienvenido al Hotel Real 
              <br><br><br>
               para mayor comunicacion y contactos 
               llamar a los nuemero 
               <br><br>
               telefono: 235 24 00 <br>
               whastsapp:  (301)000 485 25<br>
               coreo: hotelreal@hotmail.co<br>
               direccion: crr 17 # 25 - 63
               <div id="cerrar"> <a href="javascript: cerrar()"><img src="<?php echo base_url().'cerrar.png'?>" width="20px" height="20px" alt=""></a> </div>  
            </div> 
            
          </div>
        </div>
      </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>




  </div>             
  <br><br><br>
  
<!-- pie de pagina -->
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

</body>


</html>