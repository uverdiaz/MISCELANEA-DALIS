<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="shortcut icon" href="../../img/uver.jpg" type="image/x-icon">
    <title>INVENTARIO</title>
</head>
<body class="body">
    <header>
        <nav>
            
            <a href="index.php">Inicio</a>
            <a href="papeleria.php">Papeleria</a>
            <a href="copisteria.php">copisteria</a>
            <a href="contacto.php">contacto</a>
            <a href="pedido.php">pedido</a>
        </nav>
    
    <section class="textos-header">
        <h1>MIRA LO QUE POSEEMOS EN NUESTRO INVENTARIO</h1>
        <h2>Variedades Dalis J.E</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-19.74,64.63 C150.67,154.44 378.10,-52.78 520.87,52.78 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <section class="conten-form"> 
            <br><br>   
        <form action="../CONTROLADOR/control_inv.php" method="POST">
        <h2 class="h22">AGREGAR PRODUCTO</h2>
            
            <input type="number" name="tx_cod" placeholder="CODIGO">
            
            
            <input type="text" name="tx_nom" placeholder="NOMBRE PRODUCTO">
            
            
            <input type="number" name="num_pro" placeholder="NUMERO PRODUCTOS"> 
           
           
            <input type="number" name="precio" placeholder="PRECIO">
            
            
            <input type="number" name="ped" placeholder="PEDIDOS">

           
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
            
            <h2>INVENTARIO</h2>
            <br><br>
         
                <table>
                    <thead>

                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE </th>
                        <th>NUMERO</th>
                        <th>PRECIO</th>
                        <th>PEDIDOS</th>
                    </tr>
                    </thead>
                    <!--NUEVA FILA    -->
                    <tr>
                    <?php 
                    
                        foreach ($res as $key)
                            {
                                
                                
                            
                    ?>
                        <td><?php echo $key['PKCOD_PRO'];?></td>
                        <td><?php echo $key['NOM_PROD'];?></td>
                        <td><?php echo $key['NUM_PRO'];?></td>
                        <td><?php echo $key['PRE_UNI'];?></td>
                        <td><?php echo $key['FKCOD_PED'];?></td>

                    </tr>
                    <?php
                            }//cierre foreach  
                    ?>

                </table>
             </center> 
         </div>
         <br><br> 
         
         <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>phone</h4>
                <p>310 6282554</p>
            </div>
            <div class="content-foo">
                <h4>email</h4>
                <p>dalis_je@hotmail.com</p>
            </div>
            <div class="content-foo">
                <h4>location</h4>
                <p></p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; uver desing | uver diaz </h2>
    </footer>

    
</body>
</html>