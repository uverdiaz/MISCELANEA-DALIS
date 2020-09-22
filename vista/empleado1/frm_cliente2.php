<head>
    <?php include("diseño/head.php") ?>
    <title>CLIENTE</title>
</head>
<header>
        <?php include("diseño/nav.php") ?>

        <section class="textos-header">
            <h1>Siempre al lado tuyo</h1>
            <h2>Variedades Dalis J.E</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-19.74,64.63 C150.67,154.44 378.10,-52.78 520.87,52.78 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
</header>



<hr>
<div id="cotenedor-t">
    <center>
        <h2>TABLA CLIENTE</h2>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>IDENTIFICACION</th>
                    <th>NOMBRE</th>
                    <th>MES</th>
                    <th>FECHA PEDIDO</th>
                    <th>FECHA ENTREGA</th>
                    <th>PEDIDO</th>
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
                    <td><?php echo $key['PKIDEN_CLI']; ?></td>
                    <td><?php echo $key['NOM_CLI']; ?></td>
                    <td><?php echo $key['mes']; ?></td>
                    <td><?php echo $key['FECHA_I']; ?></td>
                    <td><?php echo $key['FECHA_FI']; ?></td>
                    <td><?php echo $key['FKCOD_PROD']; ?></td>
                    <td><?php echo $key['NOM_EMP']; ?></td>
                    <!-- <td> <?php //echo $key['NOM_PROD'];
                                ?></td> -->
                    <!--vinculo botones eliminar y modificar  -->
                    <td>
                        <a href="?clase=cliente1&funcion=ver_cli&cod_act=<?php echo $key['PKIDEN_CLI']; ?>"><img src="img/actu.jpg" alt="" width="20" height="20"></a>
                    </td>
                    <td>
                        <a href="?clase=cliente1&funcion=eliminar&cod_eli=<?php echo $key['PKIDEN_CLI']; ?>" onclick="return confirmation1()"><img src="img/eli.jpg" alt="" width="23" height="23"></a>
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

<script type="text/javascript">
    function confirmation() {
        if (confirm("¿Esta seguro de insertar datos?")) {
            return true;
        } else {
            return false;
        }
    }
</script>

<script type="text/javascript">
    function confirmation1() {
        if (confirm("¿Esta seguro de borrar este dato?")) {
            return true;
        } else {
            return false;
        }
    }
</script>