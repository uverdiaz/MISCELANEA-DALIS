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
        <h1>PEDIDOS SOLICITADOS</h1>
        <h2>Variedades Dalis J.E</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-19.74,64.63 C150.67,154.44 378.10,-52.78 520.87,52.78 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <section class="content-form"> 
            <br><br>   
        <form id="for" action="../CONTROLADOR/control_ped.php" method="POST">
        <h2 class="h22">PEDIDOS</h2>
            
            <input type="number" name="tx_cod" placeholder="CODIGO">
            
            <label for="">FECHA INICIO: </label> <input type="date" name="date" placeholder="FECHA INGRESO" id="input1">

            <input type="text" name="nom" placeholder="NOMBRE">

            <input type="text" name="des" placeholder="DESCRIPCION">
            
            
            <input type="number" name="num" placeholder="NUMERO"> 
           
           
            <input type="number" name="pre" placeholder="PRECIO">

            <label for="">PROVEEDOR:</label> <select name="com_pro" id="select2">
                    <?php
                    foreach ($combo as $opcion)
                    {
                    ?>
                    

                    <option value="<?php echo $opcion['cod_pro']; ?>"> <?php echo $opcion['provedor']; ?></option>


                    <?php 
                    }
                    ?>
                    
             </select>
            
             <label for="">EMPLEADO: </label> <select name="com_emp" id="select1">
                    <?php
                    foreach ($combo1 as $opcion1)
                    {
                    ?>
                    

                    <option value="<?php echo $opcion1['PKIDEN_EMP']; ?>"> <?php echo $opcion1['NOM_EMP']; ?></option>


                    <?php 
                    }
                    ?>
                    
             </select>

           
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
            
            <h2>PEDIDO</h2>
            <br>
            
             
                <table class="table">
                   
                    <thead>

                    <tr>
                        <th>CODIGO</th>
                        <th>FECHA PEDIDO</th>
                        <th>NOMBRE </th>
                        <th>DESCRIPCION</th>
                        <th>NUMERO</th>
                        <th>PRECIO</th>
                        <th>PROVEEDOR</th>
                        <th>EMPLEADO</th>
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
                        <td><?php echo $key['PKCOD_PED'];?></td>
                        <td><?php echo $key['fecha_co'];?></td>
                        <td><?php echo $key['NOM_PRO'];?></td>
                        <td><?php echo $key['descripcion'];?></td>
                        <td><?php echo $key['NUM_PRO'];?></td>
                        <td><?php echo $key['PRECIO'];?></td>
                        <td><?php echo $key['provedor'];?></td>
                        <td><?php echo $key['NOM_EMP'];?></td>
                        <!-- <td><?php //echo $key['NUM_PRO'];?></td> -->
                         <!--vinculo botones eliminar y modificar  -->
                         <td>
                             <a href="../CONTROLADOR/control_ped.php?cod_act=<?php echo $key['PKCOD_PED'];?>"><img src="../../img/actu.jpg" alt="" width="18" height="18"></a>    
                        </td>
                        <td>
                            <a href="../CONTROLADOR/control_ped.php?cod_eli=<?php echo $key['PKCOD_PED'];?>"><img src="../../img/eli.jpg" alt="" width="20" height="20"></a>   
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