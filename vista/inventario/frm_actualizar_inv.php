<head>

       <title>DALIS J.E</title>
       <?php include("diseño/head.php") ?>
</head>


<section class="content-form">
       <br><br>
       <form id="for" action="?clase=inventario&&funcion=actualizar_inv" method="POST">
              <h2 class="h22">INVENTARIO</h2>

              <!---PASAR EL DATO DE LA BASE DE DATOS A UNA VARIABLE DE PHP ---->
              <?php $ref = $res[0]; ?>

              <!---MOSTRAR EL DATO DE LA INFORMACION EN UNA CAJA DE TEXTO INVISIBLE PARA LUEGO SER CAPTURADA -->

              <input type="number" name="tx_cod" value="<?php echo $ref; ?>">


              <input type="text" name="tx_nom" value="<?php echo $res[1]; ?>">

              <input type="text" name="des" value="<?php echo $res[2]; ?>">


              <input type="number" name="num_pro" value="<?php echo $res[3]; ?>">


              <input type="number" name="precio_e" value="<?php echo $res[4]; ?>">

              <input type="number" name="precio_s" value="<?php echo $res[5]; ?>">

              <label for="">PROVEEDOR: </label> <select name="com_pro" id="select2">
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



              <input id="buton" type="submit" name="sub_actualizar" value="ACTUALIZAR">
              <button id="buton" type="button" onclick="history.go(-1);">ATRAS</button>


       </form>
</section>