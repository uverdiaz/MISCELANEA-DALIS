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
        <form id="for" action="../CONTROLADOR/control_pro.php" method="POST">
        <h2 class="h22">PEDIDOS</h2>

        <!---PASAR EL DATO DE LA BASE DE DATOS A UNA VARIABLE DE PHP ---->
        <?php $ref = $res[0];?>

        <!---MOSTRAR EL DATO DE LA INFORMACION EN UNA CAJA DE TEXTO INVISIBLE PARA LUEGO SER CAPTURADA -->

             <input type="hidden" name="tx_cod" value="<?php echo $ref; ?>">
             <!---mostrar campo dato unico --->
             <label for="">CODIGO: </label>
             <?php echo $ref; ?>
             <br><br>
            
            
            <input type="text" name="nom" value="<?php echo $res[1]; ?>">

            
          
            <input id="buton" type="submit" name="sub_actualizar" value="ACTUALIZAR">
            <button id="buton"type="button" onclick="history.go(-1);">ATRAS</button>

           
        </form>
       </section>
    
</body>
</html>