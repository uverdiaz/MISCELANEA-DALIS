<head>
    <?php include("diseño/head.php") ?>
    <title>INVENTARIO</title>
</head>

<body class="body">
    <header>

        <?php include("vista/paginas/navba.php") ?>

        <section class="textos-header">
            <h1>INVENTARIO</h1>
            <h2>Variedades Dalis J.E</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-19.74,64.63 C150.67,154.44 378.10,-52.78 520.87,52.78 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <section class="content-form">
        <br><br>
        <form id="for" action="?clase=inventario&&funcion=reg_inv" method="POST">
            <h2 class="h22">AGREGAR PRODUCTO</h2>

            <input type="number" name="tx_cod" placeholder="CODIGO">


            <input type="text" name="tx_nom" placeholder="NOMBRE PRODUCTO">

            <input type="text" name="des" placeholder="DESCRIPCION PRODUCTO">


            <input type="number" name="num_pro" placeholder="NUMERO PRODUCTOS">


            <input type="number" name="precio_e" placeholder="PRECIO ENTRADA">

            <input type="number" name="precio_s" placeholder="PRECIO SALIDA">

            <label for="">PROVEEDOR:</label> <select name="com_pro" id="select2">
                <?php
                foreach ($combo as $opcion) {
                ?>


                    <option value="<?php echo $opcion['cod_pro']; ?>"> <?php echo $opcion['provedor']; ?></option>


                <?php
                }
                ?>

            </select>


            <label for="">EMPLEADO: </label> <select name="com_emp" id="select1">
                <?php
                foreach ($combo1 as $opcion1) {
                ?>


                    <option value="<?php echo $opcion1['PKIDEN_EMP']; ?>"> <?php echo $opcion1['NOM_EMP']; ?></option>


                <?php
                }
                ?>

            </select>







            <input id="buton" type="submit" name="sub_registrar" value="REGISTRAR" id="boton">



        </form>

    </section>


    </center>
    <br><br>
    <hr>
    <br><br>
    <div id="cotenedor-t">
        <center>

            <h2>INVENTARIO</h2>
            <br>


            <table class="table">

                <thead>

                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE </th>
                        <th>DESCRIPCION</th>
                        <th>NUMERO</th>
                        <th>PRECIO ENTRADA</th>
                        <th>PRECIO SALIDA</th>
                        <th>PROVEEDOR</th>
                        <th>EMPLEADO</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <!--NUEVA FILA    -->
                <tr>
                    <?php

                    foreach ($res as $key) {



                    ?>
                        <td><?php echo $key['PKCOD_PRO']; ?></td>
                        <td><?php echo $key['NOM_PROD']; ?></td>
                        <td><?php echo $key['descripcion']; ?></td>
                        <td><?php echo $key['NUM_PRO']; ?></td>
                        <td><?php echo $key['PRE_EN']; ?></td>
                        <td><?php echo $key['PRE_SAL']; ?></td>
                        <td><?php echo $key['provedor']; ?></td>
                        <td><?php echo $key['NOM_EMP']; ?></td>
                        <!-- <td><?php //echo $key['NUM_PRO'];
                                    ?></td> -->
                        <!--vinculo botones eliminar y modificar  -->
                        <td>
                            <a href="?clase=inventario&&funcion=ver_inv&cod_act=<?php echo $key['PKCOD_PRO']; ?>"><img src="img/actu.jpg" alt="" width="18" height="18"></a>
                        </td>
                        <td>
                            <a href="?clase=inventario&&funcion=eliminar&cod_eli=<?php echo $key['PKCOD_PRO']; ?>"><img src="img/eli.jpg" alt="" width="20" height="20"></a>
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