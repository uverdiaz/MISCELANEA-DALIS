<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once("compartido/head.php")?>
    <title>Pedido</title>
</head>
<body>
    <header>
        <?php require_once("compartido/nav.php")?>
    
    <section class="textos-header">
        <h1>Obten la reservación de tus productos</h1>
        <h2>Variedades Dalis J.E</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-19.74,64.63 C150.67,154.44 378.10,-52.78 520.87,52.78 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <section class="content-formm"> <br><br><br><br>
               
    <form id="formc" action="control.php" method="POST">

    <center>    
        <h2 class="h22">MENU PRINCIPAL</h2>
        <br>
        <input type="submit" name="sub_cli" onClick="activar()" value="CLIENTE"> 
        
        <input type="submit" name="sub_in" value="EMPLEADO">
        
        
    </center>
   

    </form>
    </section>

    <script language="javascript">


function activar(){
   document.getElementById('more').disabled = false;
 }


</script>
    
    

    <?php require_once("compartido/footer.php")?>
    
</body>
</html>