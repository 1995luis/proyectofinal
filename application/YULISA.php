<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php  echo base_url().'css/estilos.css' ?>">
    <title>Inicio</title>
    
    
<hr>
</head>
<body class="body">
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;">
    
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url().'imagenes/playa.jpg'?>" class="d-block w-100" alt="img" widht="100" height="">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url().'imagenes/foto1.jpeg'?>" class="d-block w-100" alt="img" widht="100"heigh="">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url().'imagenes/foto2.jpeg'?>" class="d-block w-100" alt="img" widht="100" height="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
</div>
    <div class="w3-display-middle w3-margin-top w3-center">
        <hr>
        <hr>
   
    <form action="<?php echo base_url().'index.php/guardar.php'?>"method="POST" id="formulario"class="form">
<div class="container">

<hr>
<hr>

<hr>
<br>


   <h5 class="letra">tu identificacion</h5>
    <input type="text" name="nombre" placeholder="escriba su identificacion">
    

     <hr>

    <h5 class="letra">tus nombres</h5>
     <input type="text" name="nombre" placeholder="escriba su nombre" >
     
 <hr>
      <h5 class="letra">tus apellidos</h5>
     <input type="text" name="apellidos" placeholder="escriba su apellido">
    

     <hr>
     <h5 class="letra">celular</h5>
         <input type="text" name="celular" placeholder="escriba su celular">
         

  <hr>
  <h5 class="letra">tu telefono</h5>
     <input type="text" name="telefono" placeholder="escriba su telefono">
     

<hr>
<h5 class="letra">tipo de habotacion</h5>
   
<hr>
   <select name="tipo de habitacion" id="">

<option value="1">Discreta</option>
<option value="2">Moderna</option>
<option value="">Romantica</option>
<option value="">Sofisticada</option>

   </select>
    

    <hr>

   
    

    <hr>

                    <select name="ciudades" id="">
                            <option value="">ingrese la ciudad deseada</option>
                           <option value="1">Antioquia</option>
                              <option value="2">Bogota</option>
                                    <option value="3">Barranquila</option>
                                            <option value="4">Cartagena</option>
                                    <option value="5">Pereira</option>
                              <option value="6">Manizales</option>
                           </select>
                           <hr>
                           <br>

                         <button type="submit">enviar</button>

</form>
    </div>
    </header>
    <hr>
    
   <footer>
       <div class="container-footer-all">

    <div class="container-body"> 

        <div class="column1">
            <h1>Mas información de nuestra compañia</h1>

            <p>
                Es un sitio web líder en reservación de hospedaje en línea. Nos apasiona viajar. 
                Todos los días inspiramos y llegamos a millones de personas gracias a nuestros 90 sitios web locales en 41 idiomas. Por eso, cuando se trata de reservar los mejores hoteles, alquileres vacacionales, resorts, departamentos, 
                casas de huéspedes o incluso una casa en un árbol, tenemos todo lo que necesitas. Con cientos de miles de establecimientos en más de 200 países y territorios, tenemos las mejores opciones con Precio garantizado. Nuestro sitio es ameno y fácil de usar, 
                y tenemos herramientas en línea innovadoras y una aplicación destacada.
            </p>
        </div>
 <div class="column2">

    <h1>Redes Sociales </h1>

    <div class="row">
       <a href="https://www.facebook.com/Hotel-Real-101140105059474"><img src="<?php echo base_url().'imagenes/facebook.png'?>"></a> 
        <label> Siguenos en Facebook</label>
    </div>

    <div class="row">
        <a href="https://www.google.es/"><img src="<?php echo base_url().'imagenes/google.jpg'?>"</a>
        <label> Siguenos en Google</label>
    </div>

    <div class="row">
       <a href="https://www.instagram.com/?hl=es-la"><img src="<?php echo base_url().'imagenes/instagram.jpg'?>"></a> 
        <label> Siguenos en Instagram</label>
    </div>

    <div class="row">
        <a href="https://twitter.com/?logout=1598331123094"><img src=" <?php echo base_url().'imagenes/twitter.jpg'?>"></a>
        <label> Siguenos en Twitter</label>
    </div>


 </div>

 <div class="column3">

    <h1>Informacion Contactos</h1>

    <div class="row2">
       <a href="https://www.google.com/maps/place/Cra.+50a+%23102-91+a+102-1,+Medell%C3%ADn,+Antioquia/@6.2937945,-75.557971,185m/data=!3m2!1e3!4b1!4m5!3m4!1s0x8e442f33f0576b21:0x3a58eaf2fc4fc1c!8m2!3d6.2937932!4d-75.5574238!5m1!1e4?hl=es"><img src="<?php echo base_url().'home.png'?>"></a>
        <label>Medellin-Antioquia <br> Colombia <br>Cra. 50a #102-91 a 102-1</label>
    </div>

    <div class="row2">
        <img src="<?php echo base_url().'imagenes/smart.jpg'?>">
        <label>+57 325 323 6558</label>
    </div>

    <div class="row2">
        <img src="<?php echo base_url().'imagenes/correo.png'?>">
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







    <hr>
 <div class="w3-top">
    <div class="w3-bar w3-white w3-wid w3-padding w3-card">
    <a href="<?php echo base_url().'index.php/guardar'?>" class="w3-bar w3-bar-item w3-button">Inicio</a>
    <div class="w3-right w3-hide-small">
    <a href="<?php echo base_url().'index.php/guardar/index'?>" class="w3-bar w3-bar-item w3-button">Inscribete</a>
    <div class="w3-right w3-hide-small">
        <a href="<?php echo base_url().'index.php/agencia/verpro'?>" class="w3-bar w3-bar-item w3-button">ver mas</a>
        <a href="<?php echo base_url().'index.php/agencia/verpe'?>" class="w3-bar w3-bar-item w3-button">conoce </a>
        <a href="<?php echo base_url().'index.php/agencia/vercon'?>" class="w3-bar w3-bar-item w3-button">Contactenos</a>
    </div>
    </div>
    </div>



    
 

<hr>
<br>


<?php  isset($msg)?  $msg:'' ?>

</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
