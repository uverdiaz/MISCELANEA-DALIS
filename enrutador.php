<?php


if (isset($_GET['clase'])&& isset($_GET['funcion'])) 
{
    $clase=$_GET['clase'];
    $funcion=$_GET['funcion'];
    llamar($clase,$funcion);
}

else
{
    $clase='pagina';
    $funcion='principal';
    llamar($clase,$funcion);
}

function llamar($clase,$funcion)
{
    require_once("controlador/".$clase."_control.php");
    
    switch ($clase) {
        case 'pagina':
            $control= new home();//instanciar
        break;
        case 'login':
            $control= new login();//instanciar
        break;
        case 'provedor':
            $control= new proveedor1();//instanciar
        break;
        case 'recibos':
            $control= new recibos1();//instanciar
        break;
        
    }//fin switch

    /*llamar funcion*/
    $control->{$funcion}();
}

?>