<head>
    <?php include("diseño/head.php") ?>
    <title>CLIENTE</title>
</head>

<body>
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

    <section class="content-form">
        <br><br>
        <form id="formc" action="?clase=cliente1&&funcion=reg_cli" method="POST">
            <h2 class="h22">FORMULARIO DE CLIENTE</h2>



            <input type="text" name="tx_nom" placeholder="NOMBRE">

            <label for="">MES: </label> <select name="com_mes" id="mes">
                <?php
                foreach ($combo1 as $opcion1) {
                ?>

                    <option value="<?php echo $opcion1['PKCOD_MES']; ?>"> <?php echo $opcion1['mes']; ?></option>


                <?php
                }
                ?>
            </select>


            <label for="">FECHA PEDIDO: </label> <input type="date" name="FECHA_I" placeholder="FECHA PEDIDO" id="input1">

            <label for="">FECHA ARRIMO: </label> <input type="date" name="FECHA_FI" placeholder="FECHA RECOGIDA PEDIDO" id="input1">

            <textarea name="num_ped" id="" cols="49" rows="5" placeholder="PEDIDO"></textarea>



            <label for="">EMPLEADO: </label> <select name="com_emp" id="select1">
                <?php
                foreach ($combo as $opcion) {
                ?>


                    <option value="<?php echo $opcion['PKIDEN_EMP']; ?>"> <?php echo $opcion['NOM_EMP']; ?></option>


                <?php
                }
                ?>

            </select>


            <br><br>

            <input id="buton" type="submit" name="sub_registrar" onclick="return confirmation()" value="REGISTRAR">



        </form>
    </section>
    

    

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
            if (confirm("¿Esta seguro de borrar este datos?")) {
                return true;
            } else {
                return false;
            }
        }
    </script>