<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once("compartido/head.php")?>
    <title>Papeleria DALIS J.E</title>
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

    <form action="formulario/CONTROLADOR/control.php" method="POST">

    <center>    
         <h2>MENU PRINCIPAL</h2>
         <br>
     <h3>SELECCIONE UNA OPCION DE MENU</h3>
     <br><br>
     <input type="submit" name="sub_cli" value="CLIENTE">
     <input type="submit" name="sub_emp" value="INVENTARIO">
     <br><br>
     <button id="buton" type="button" onclick="history.go(-1);">ATRAS</button>
    </center>
   

    </form>
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