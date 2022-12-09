<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU DE REPORTES</title>
    <?php include("diseño/head.php") ?>
</head>


<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">PerCol-XYZ</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="display: flex;">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 " style="text-align: left;
    display:inline-block;" >
            <li class="nav-item">
                <a class="nav-link">
                    <?php

echo "<a href='?clase=login&&funcion=login3' style='align:left'><img src='img/ex.jpg' width='25' height='25'> </a>";




                    ?>


                </a>
            </li>

        </ul>
    </div>
</nav>


<br><br><br><br>

<div class="galeria">
    <h1>MENU DE REPORTES</h1>
    <div class="linea"></div>
    <div class="contenedor-imagenes">
        <div class="imagen">

            <a href="?clase=cliente&&funcion=ppal_cliente"><img src="img/h8.png" alt="" style="height:100%;"></a>


            <a href="?clase=cliente&&funcion=ppal_cliente">
                <div class="overlay">
                    <h2>NOMINA</h2>
                </div>
            </a>

        </div>

        <div class="imagen">

            <a href="?clase=empleado&&funcion=ppal_empleado"><img src="img/h9.png" alt="" style="height:100%;"></a>
            <a href="?clase=empleado&&funcion=ppal_empleado">
                <div class="overlay">
                    <h2>INFORMACION PERSONAL</h2>
                </div>
            </a>
        </div>

        <div class="imagen">

            <a href="?clase=inventario&&funcion=ppal_inven"><img src="img/h3.png" alt="" style="height:100%;"></a>
            <a href="?clase=inventario&&funcion=ppal_inven">
                <div class="overlay">
                    <h2>SALUD y PENSIÓN:</h2>
                </div>
            </a>
        </div>
        <div class="imagen">

            <a href="?clase=pedido&&funcion=ppal_pedi"><img src="img/h7.png" alt="" style="height:100%;"></a>
            <a href="?clase=pedido&&funcion=ppal_pedi">
                <div class="overlay">
                    <h2>NOVEDADES:</h2>
                </div>
            </a>
        </div>
        <div class="imagen">

        
        </div>
        <div class="imagen">

        
            
        </div>

        <!-- <div class="imagen">
                <img src="img/1 (2).jpg" alt="">
            </div> -->
    </div>
</div>

