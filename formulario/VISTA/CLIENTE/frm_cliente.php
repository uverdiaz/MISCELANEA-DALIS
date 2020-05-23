<!DOCTYPE html>
<html lang="es">
<head>    
    <?php include("../../compartido/head.php")?>
    <title>CLIENTE</title>
</head>
<body>
    <header>
        <?php include("../../compartido/nav.php")?>
    
    <section class="textos-header">
        <h1>Obten la reservación de tus productos</h1>
        <h2>Variedades Dalis J.E</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-19.74,64.63 C150.67,154.44 378.10,-52.78 520.87,52.78 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    
     <section class="content-form">
         <br><br>
        <form id="formc" action="../CONTROLADOR/control_cli.php" method="POST">
        <h2 class="h22">FORMULARIO DE CLIENTE</h2>
            
            <input type="text" name="tx_iden" placeholder="IDENTIFICACION">
           
            <input type="text" name="tx_nom" placeholder="NOMBRE">
            
            <input type="number" name="num_ped" placeholder="PEDIDO"> 
          
            <input id="buton" type="submit" name="sub_registrar" value="REGISTRAR">
            <button id="buton"type="button" onclick="history.go(-1);">ATRAS</button>

           
        </form>
       </section>
        <br><br><br>    

        <hr>
        <div id="cotenedor-t">
        <center>
            <h2>TABLA CLIENTE</h2>
            <br><br>
         
                <table>
                   <thead>
                    <tr>
                    <th>IDENTIFICACION</th>
                    <th>NOMBRE</th>   
                    <th>PEDIDO</th>   
                    </tr>
                    </thead>
                    <!--NUEVA FILA    -->
                    <tr>
                    <?php 
                    
                        foreach ($res as $key)
                            {
                                

                            
                    ?>
                        <td><?php echo $key['PKIDEN_CLI'];?></td>
                        <td><?php echo $key['NOM_CLI'];?></td>
                        <td><?php echo $key['FKCOD_PROD'];?></td>

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