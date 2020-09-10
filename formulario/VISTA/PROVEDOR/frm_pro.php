<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("../../compartido/head.php")?>
    <title>PEDIDOS</title>
</head>
<body class="body">
    <header>
    <?php include("../../compartido/config.php")?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
                <a class="navbar-brand" href="#">Variedades DALIS J.E</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $config->root_folder ?>/entrada.php">volver</a>
                    </li>
                    
                    </ul>
            </div>
         </nav>
    
    <section class="textos-header">
        <h1>PROVEEDOR</h1>
        <h2>Variedades Dalis J.E</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-19.74,64.63 C150.67,154.44 378.10,-52.78 520.87,52.78 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <section class="content-form1"> 
            <br><br>   
        <form id="for" action="../CONTROLADOR/control_pro.php" method="POST">
        <h2 class="h22">PROVEEDOR</h2>
            
            
            
            
            <input type="text" name="nom" placeholder="NOMBRE">

            


           
            <input id="buton" type="submit" name="sub_registrar" value="REGISTRAR" id="boton">
           

           
          </form> 

    </section>
 
        
        </center>
        <br><br>
        <hr>
        <br><br>
        <div id="cotenedor-t">
          <center>
            
            <h2>PROVEDOR</h2>
            <br>
            
             
                <table class="table">
                   
                    <thead>

                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE </th>
                        
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <!--NUEVA FILA    -->
                    <tr>
                    <?php 
                    
                        foreach ($res as $key)
                            {
                                
                                
                            
                    ?>
                        <td><?php echo $key['cod_pro'];?></td>
                        <td><?php echo $key['provedor'];?></td>
                        
                        <!-- <td><?php //echo $key['NUM_PRO'];?></td> -->
                         <!--vinculo botones eliminar y modificar  -->
                         <td>
                             <a href="../CONTROLADOR/control_pro.php?cod_act=<?php echo $key['cod_pro'];?>"><img src="../../img/actu.jpg" alt="" width="18" height="18"></a>    
                        </td>
                        <td>
                            <a href="../CONTROLADOR/control_pro.php?cod_eli=<?php echo $key['cod_pro'];?>"><img src="../../img/eli.jpg" alt="" width="20" height="20"></a>   
                        </td>



                    </tr>
                    <?php 
                            }//cierre foreach  
                    ?>
                  
                </table>
             
                </center>
         </div>
         <br><br> 
         
         <?php require_once("../../compartido/footer.php")?>

    
</body>
</html>