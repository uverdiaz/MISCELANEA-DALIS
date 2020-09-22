<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU PRINCIPAL</title>
    <?php include("diseño/head.php") ?>
</head>


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
                    $usuario = $_SESSION['username'];
                    if (!isset($usuario)) {
                        include("vista/paginas/acu_pedido.php");
                    } else {

                        echo "<a href='?clase=login&&funcion=login3'><img src='img/ex.jpg' width='25' height='25'> </a>";
                    }




                    ?>


                </a>
            </li>

        </ul>
    </div>
</nav>


<br><br><br><br>

<div class="galeria">
    <h1>MENU PRINCIPAL</h1>
    <div class="linea"></div>
    <div class="contenedor-imagenes">
        <div class="imagen">

            <a href="?clase=cliente&&funcion=ppal_cliente"><img src="img/h1.png" alt="" style="height:100%;"></a>


            <a href="?clase=cliente&&funcion=ppal_cliente">
                <div class="overlay">
                    <h2>CLIENTE</h2>
                </div>
            </a>

        </div>

        <div class="imagen">

            <a href="?clase=empleado&&funcion=ppal_empleado"><img src="img/h9.png" alt="" style="height:100%;"></a>
            <a href="?clase=empleado&&funcion=ppal_empleado">
                <div class="overlay">
                    <h2>EMPLEADO</h2>
                </div>
            </a>
        </div>

        <div class="imagen">

            <a href="?clase=inventario&&funcion=ppal_inven"><img src="img/h3.png" alt="" style="height:100%;"></a>
            <a href="?clase=inventario&&funcion=ppal_inven">
                <div class="overlay">
                    <h2>INVENTARIO</h2>
                </div>
            </a>
        </div>
        <div class="imagen">

            <a href="?clase=pedido&&funcion=ppal_pedi"><img src="img/h7.png" alt="" style="height:100%;"></a>
            <a href="?clase=pedido&&funcion=ppal_pedi">
                <div class="overlay">
                    <h2>PEDIDO</h2>
                </div>
            </a>
        </div>
        <div class="imagen">

            <a href="?clase=recibos&&funcion=ppal_rec"><img src="img/h8.png" alt="" style="height:100%;"></a>
            <a href="?clase=recibos&&funcion=ppal_rec">
                <div class="overlay">
                    <h2>RECIBO</h2>
                </div>
            </a>
        </div>
        <div class="imagen">

            <a href="?clase=provedor&&funcion=ppal_ped"><img src="img/h6.png" alt="" style="height:100%;"></a>
            <a href="?clase=provedor&&funcion=ppal_ped">
                <div class="overlay">
                    <h2>PROVEEDOR</h2>
                </div>
            </a>
        </div>

        <!-- <div class="imagen">
                <img src="img/1 (2).jpg" alt="">
            </div> -->
    </div>
</div>

