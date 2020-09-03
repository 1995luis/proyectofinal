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
   
    <form action="<?php echo base_url().'index.php/guardar.php'?>"method="POST" id="formulario">
<div class="container">

<hr>
<hr>

<hr>
<br>
   <h5 class="letra">tu identificacion</h5>
    <input type="text" name="nombre" placeholder="escriba su identificacion" style="border-color:red;">
    

     <hr>

    <h5 class="letra">tus nombres</h5>
     <input type="text" name="nombre" placeholder="escriba su nombre" style="border-color:violet;">
     
 <hr>
      <h5 class="letra">tus apellidos</h5>
     <input type="text" name="apellidos" placeholder="escriba su apellido" style="border-color:blue;">
    

     <hr>
     <h5 class="letra">celular</h5>
         <input type="text" name="celular" placeholder="escriba su celular" style="border-color:green;">
         

  <hr>
  <h5 class="letra">tu telefono</h5>
     <input type="text" name="telefono" placeholder="escriba su telefono" style="border-color:yellow;">
     

<hr>
<h5 class="letra">tipo de habotacion</h5>
   <input type="text" name="habitacion" placeholder="tipo de habitacion" style="border-color:rosa">
    

    <hr>

   
    

    <hr>

                    <select name="ciudades" id="">
                            <option value="">ingrese la ciudad deseada</option style="border-color:green">
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

    <hr>
 <div class="w3-top">
    <div class="w3-bar w3-white w3-wid w3-padding w3-card">
    <a href="<?php echo base_url().'index.php/guardar'?>" class="w3-bar w3-bar-item w3-button">Inicio</a>
    <div class="w3-right w3-hide-small">
    <a href="<?php echo base_url().'index.php/guardar'?>" class="w3-bar w3-bar-item w3-button">Inscribete</a>
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


<div><center><footer class="pie">
<h5>conctactanos</h5>
<h5>3122853767</h5>
<h5>3045727874</h5>
</footer>

</center>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
