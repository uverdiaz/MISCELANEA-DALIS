<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DALIS J.E</title>
    <?php include("../../compartido/head.php")?>
</head>
<body>
       <section class="content-form">
         <br><br>
        <form id="for" action="../CONTROLADOR/control_re.php" method="POST">
        <h2 class="h22">RECIBOS</h2>

        <!---PASAR EL DATO DE LA BASE DE DATOS A UNA VARIABLE DE PHP ---->
        <?php $ref = $res[0];?>

        <!---MOSTRAR EL DATO DE LA INFORMACION EN UNA CAJA DE TEXTO INVISIBLE PARA LUEGO SER CAPTURADA -->

             <input type="number" name="tx_cod" value="<?php echo $ref; ?>">

             <label for="">MES: </label> <select name="com_mes" id="mes">
                   <?php
                    foreach ($combo1 as $opcion1)
                    {
                    ?>

                    <option value="<?php echo $opcion1['PKCOD_MES']; ?>"> <?php echo $opcion1['mes']; ?></option>


                    <?php 
                    }
                    ?>
            </select>  
            
            
            <input type="text" name="luz" value="<?php echo $res[2]; ?>">
            
            
            <input type="text" name="agua" value="<?php echo $res[3]; ?>"> 
           
           
            <label for="">FECHA INICIO:  </label> <input type="date" name="fecha_i" value="<?php echo $res[4]; ?>" id="input1">

            <label for="">FECHA DE FIN:  </label> <input type="date" name="fecha_f" value="<?php echo $res[5]; ?>" id="input1">
           
            <label for="">EMPLEADO: </label> <select name="com_emp" id="select1">
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