<head>
    <?php include("diseño/head.php") ?>
    <title>DALIS J.E</title>

</head>

<body>
    <section class="content-form">
        <br><br>
        <form id="for" action="?clase=empleado&&funcion=actualizar_emp" method="POST">
            <h2 class="h22">empleado</h2>

            <!---PASAR EL DATO DE LA BASE DE DATOS A UNA VARIABLE DE PHP ---->
            <?php $ref = $res[0]; ?>

            <!---MOSTRAR EL DATO DE LA INFORMACION EN UNA CAJA DE TEXTO INVISIBLE PARA LUEGO SER CAPTURADA -->

            <input type="number" name="tx_cod" value="<?php echo $ref; ?>">


            <input type="text" name="nom" value="<?php echo $res[1]; ?>">


            <input type="text" name="ape" value="<?php echo $res[2]; ?>">


            <input type="number" name="adad" value="<?php echo $res[3]; ?>">


            <input type="number" name="sal" value="<?php echo $res[4]; ?>">



            <input id="buton" type="submit" name="sub_actualizar" value="ACTUALIZAR">
            <button id="buton" type="button" onclick="history.go(-1);">ATRAS</button>


        </form>
    </section>

</body>

