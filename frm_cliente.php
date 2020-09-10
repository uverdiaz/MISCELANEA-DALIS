<!DOCTYPE html>
<html lang="es">
<head>    
    <?php include("compartido/head.php")?>
    <title>CLIENTE</title>
</head>
<body>
    <header>
        <?php include("compartido/nav.php")?>
    
    <section class="textos-header">
        <h1>Siempre al lado tuyo</h1>
        <h2>Variedades Dalis J.E</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-19.74,64.63 C150.67,154.44 378.10,-52.78 520.87,52.78 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    
     <section class="content-form">
         <br><br>
        <form id="formc" action="control_cli.php" method="POST">
        <h2 class="h22">FORMULARIO DE CLIENTE</h2>
            
            
           
            <input type="text" name="tx_nom" placeholder="NOMBRE">

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
           

            <label for="">FECHA PEDIDO:  </label>  <input type="date" name="FECHA_I" placeholder="FECHA PEDIDO" id="input1">

            <label for="">FECHA ARRIMO:  </label>  <input type="date" name="FECHA_FI" placeholder="FECHA RECOGIDA PEDIDO" id="input1">
            
            <textarea name="num_ped" id="" cols="49" rows="5" placeholder="PEDIDO"></textarea>

                    

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
            
            
            <br><br>
          
            <input id="buton" type="submit"  name="sub_registrar"  onclick="return confirmation()" value="REGISTRAR">
            

           
        </form>
       </section>
        <br><br><br>    

        <hr>
        <div id="cotenedor-t">
        <center>
            <h2>TABLA CLIENTE</h2>
            <br>
         
                <table class="table">
                   <thead>
                    <tr>
                    <th>IDENTIFICACION</th>
                    <th>NOMBRE</th>  
                    <th>MES</th>
                    <th>FECHA PEDIDO</th>
                    <th>FECHA ENTREGA</th> 
                    <th>PEDIDO</th>
                    <th>EMPLEADO</th>
                    <th></th>
                    <th></th>
                    

                    
                    </tr>
                    </thead>
                    <!-- NUEVA FILA    -->
                    <tr>
                    <?php 
                    
                        foreach ($res as $key)
                            {
                                

                            
                    ?>
                        <td><?php echo $key['PKIDEN_CLI'];?></td>
                        <td><?php echo $key['NOM_CLI'];?></td>
                        <td><?php echo $key['mes'];?></td>
                        <td><?php echo $key['FECHA_I'];?></td>
                        <td><?php echo $key['FECHA_FI'];?></td>
                        <td><?php echo $key['FKCOD_PROD'];?></td>
                        <td><?php echo $key['NOM_EMP'];?></td>
                        

                        <!--vinculo botones eliminar y modificar  -->
                        <td>
                            <a href="control_cli.php?cod_act=<?php echo $key['PKIDEN_CLI'];?>" ><img src="img/actu.jpg" alt="" width="20" height="20"></a>    
                         </td>
                         <td>
                            <a href="control_cli.php?cod_eli=<?php echo $key['PKIDEN_CLI'];?>" onclick="return confirmation1()" id="more" disabled="true"><img src="img/eli.jpg" alt="" width="23" height="23"></a>   
                        </td>

                    </tr>
                    <?php
                            }//cierre foreach  
                    ?>

                </table>
         </center> 
         </div>
         <br><br>  
         
         <?php require_once("compartido/footer.php")?>

         <script type="text/javascript">
                function confirmation() 
                {
                    if(confirm("¿Esta seguro de insertar datos?"))
                {
                return true;
                }
                else
                {
                return false;
                }
                }
         </script>

         <script type="text/javascript">
                function confirmation1() 
                {
                    if(confirm("¿Esta seguro de borrar este datos?"))
                {
                return true;
                }
                else
                {
                return false;
                }
                }
         </script>

    
</body>
</html>