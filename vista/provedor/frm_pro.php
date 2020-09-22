<head>
    <?php include("diseño/head.php") ?>
    <title>PEDIDOS</title>
</head>

<body class="body">
    <header>
       
        <?php include("vista/paginas/navba.php")?>

        <section class="textos-header">
            <h1>PROVEEDOR</h1>
            <h2>Variedades Dalis J.E</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-19.74,64.63 C150.67,154.44 378.10,-52.78 520.87,52.78 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <section class="content-form1">
        <br><br>
        <form id="for" action="?clase=provedor&&funcion=reg_ped" method="POST">
            <h2 class="h22">PROVEEDOR</h2>




            <input type="text" name="nom" placeholder="NOMBRE">





            <input id="buton" type="submit" name="sub_registrar" value="REGISTRAR" id="boton">



        </form>

    </section>


    </center>
    <br><br>
    <hr>
    <br><br>
    <div id="cotenedor-t">
        <center>

            <h2>PROVEDOR</h2>
            <br>


            <table class="table">

                <thead>

                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE </th>

                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <!--NUEVA FILA    -->
                <tr>
                    <?php

                    foreach ($res as $key) {



                    ?>
                        <td><?php echo $key['cod_pro']; ?></td>
                        <td><?php echo $key['provedor']; ?></td>

                        <!-- <td><?php //echo $key['NUM_PRO'];
                                    ?></td> -->
                        <!--vinculo botones eliminar y modificar  -->
                        <td>
                            <a href="?clase=provedor&&funcion=ver_ped&cod_act=<?php echo $key['cod_pro']; ?>"><img src="img/actu.jpg" alt="" width="18" height="18"></a>
                        </td>
                        <td>
                            <a href="?clase=provedor&&funcion=eliminar&cod_eli=<?php echo $key['cod_pro']; ?>"><img src="img/eli.jpg" alt="" width="20" height="20"></a>
                        </td>



                </tr>
            <?php
                    } //cierre foreach  
            ?>

            </table>

        </center>
    </div>
    <br><br>

    <?php require_once("diseño/footer.php") ?>


</body>