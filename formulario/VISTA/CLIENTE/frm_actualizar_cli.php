<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>DALIS J.E</title>
    <?php include("../../compartido/head.php")?>
</head>
<body>
       <section class="content-form">
         <br><br>
        <form id="formc" action="control_cli.php" method="POST">
        <h2 class="h22">FORMULARIO DE CLIENTE</h2>

        <!---PASAR EL DATO DE LA BASE DE DATOS A UNA VARIABLE DE PHP ---->
        <?php $ref = $res[0];?>

        <!---MOSTRAR EL DATO DE LA INFORMACION EN UNA CAJA DE TEXTO INVISIBLE PARA LUEGO SER CAPTURADA -->
            
            <input type="text" name="tx_iden" value="<?php echo $ref; ?>">
           
            <input type="text" name="tx_nom" value="<?php echo $res[1]; ?>">

            <select name="com_mes">
                   <?php
                    foreach ($combo1 as $opcion1)
                    {
                    ?>

                    <option value="<?php echo $opcion1['PKCOD_MES']; ?>"> <?php echo $opcion1['mes']; ?></option>


                    <?php 
                    }
                    ?>
            </select>    
            <input type="date" name="FECHA_I"  value="<?php echo $res[3]; ?>">

            <input type="date" name="FECHA_FI"  value="<?php echo $res[4]; ?>">
            
            <input type="text" name="num_ped" value="<?php echo $res[5]; ?>"> 

            <select name="com_emp">
                    <?php
                    foreach ($combo as $opcion)
                    {
                    ?>

                    <option value="<?php echo $opcion['PKIDEN_EMP']; ?>"> <?php echo $opcion['NOM_EMP']; ?></option>


                    <?php 
                    }
                    ?>
                    
             </select>
          
            <input id="buton" type="submit" name="sub_actualizar" value="ACTUALIZAR">
            <button id="buton"type="button" onclick="history.go(-1);">ATRAS</button>

           
        </form>
       </section>
    
</body>
</html>