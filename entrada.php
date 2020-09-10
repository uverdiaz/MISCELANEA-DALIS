<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("compartido/head.php")?>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Variedades DALIS J.E</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="margin-left: 1060px;">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link">
        <?php

                session_start();
                $usuario= $_SESSION['username'];
                if(!isset($usuario)){
                    header("location: pedido.php");
                }
                else{

                echo "<a href='logica/salir.php'><img src='img/ex.jpg' width='25' height='25'> </a>";

                }

                


                ?>


        </a>
      </li>
      
    </ul>
  </div>
</nav>
    
    <section class="textos-header">
        <h1>Bienvenido <?php $usuario ?></h1>
        <h2>Variedades Dalis J.E</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-19.74,64.63 C150.67,154.44 378.10,-52.78 520.87,52.78 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>


<section class="content-form">
  <br><br><br><br><br><br><br>
<form id="for" action="formulario/CONTROLADOR/control.php" method="POST">

<center>    
    <h2 class="h22">MENU PRINCIPAL</h2>
    <br>

    <input type="submit" name="sub_cli" value="CLIENTE">  
    <input type="submit" name="sub_emp" value="EMPLEADO">
    <input type="submit" name="sub_inv" value="INVENTARIO">
    <input type="submit" name="sub_ped" value="PEDIDOS">
    <input type="submit" name="sub_rec" value="RECIBOS">
    <input type="submit" name="sub_pro" value="PROVEEDOR">
   
    
    
</center>


</form>
</section>

<?php require_once("compartido/footer.php")?>
</body>
</html>