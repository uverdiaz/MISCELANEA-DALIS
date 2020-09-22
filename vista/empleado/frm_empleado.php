<head>
    <?php include("diseño/head.php") ?>
    <title>EMPLEADO</title>
</head>

<body class="body">
    <header>

        <?php include("vista/paginas/navba.php") ?>
        <section class="textos-header">
            <h1>EMPLEADOS</h1>
            <h2>Variedades Dalis J.E</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-19.74,64.63 C150.67,154.44 378.10,-52.78 520.87,52.78 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <section class="content-form">
        <br><br>
        <form id="for" action="?clase=empleado&&funcion=reg_emp" method="POST">
            <h2 class="h22">EMPLEADOS</h2>

            <input type="number" name="tx_cod" placeholder="CODIGO">


            <input type="text" name="nom" placeholder="NOMBRE">


            <input type="text" name="ape" placeholder="APELLIDO">


            <input type="number" name="adad" placeholder="EDAD">


            <input type="number" name="sal" placeholder="SALARIO">


            <input id="buton" type="submit" name="sub_registrar" value="REGISTRAR" id="boton">
            <button id="buton" type="button" onclick="history.go(-1);">ATRAS</button>


        </form>

    </section>


    </center>
    <br><br>
    <hr>
    <br><br>
    <div id="cotenedor-t">
        <center>

            <h2>EMPLEADO</h2>
            <br>


            <table class="table">

                <thead>

                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE </th>
                        <th>APELLIDO</th>
                        <th>EDAD</th>
                        <th>SALARIO</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <!--NUEVA FILA    -->
                <tr>
                    <?php

                    foreach ($res as $key) {



                    ?>
                        <td><?php echo $key['PKIDEN_EMP']; ?></td>
                        <td><?php echo $key['NOM_EMP']; ?></td>
                        <td><?php echo $key['APE_EMP']; ?></td>
                        <td><?php echo $key['EDAD']; ?></td>
                        <td><?php echo $key['SALARIO']; ?></td>
                        <!-- <td><?php //echo $key['NUM_PRO'];
                                    ?></td> -->
                        <!--vinculo botones eliminar y modificar  -->
                        <td>
                            <a href="?clase=empleado&&funcion=ver_emp&cod_act=<?php echo $key['PKIDEN_EMP']; ?>"><img src="img/actu.jpg" alt="" width="18" height="18"></a>
                        </td>
                        <td>
                            <a href="?clase=empleado&&funcion=eliminar&cod_eli=<?php echo $key['PKIDEN_EMP']; ?>"><img src="img/eli.jpg" alt="" width="20" height="20"></a>
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