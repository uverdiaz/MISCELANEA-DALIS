<?php
include("base_datos/conexion_base.php");
include("logica/clase_producto.php");
/*crear la clase curso*/
class PEDIDO extends PRODUCTO
{
    /*atributos*/
    private $cod;
    private $fecha;
    private $precio;

    function __construct($nom, $des, $num, $pro, $emp,$cod, $fecha, $precio)
    {
        parent::__construct($nom, $des, $num, $pro, $emp);
        $this->cod = $cod;
        $this->fecha = $fecha;
        $this->precio = $precio;
    }
    /* METODOS DE ESCRITURA Y LECTURA*/
    public function setCod($cod)
    {
        $this->cod = $cod;
    } //fin setPkcod_pro

    public function getCod()
    {
        return $this->cod;
    } //fin getPkcod_pro

    public function setFe($fecha)
    {
        $this->fecha = $fecha;
    } //fin setPkcod_pro

    public function getFe()
    {
        return $this->fecha;
    } //fin getPkcod_pro

    public function setPre($precio)
    {
        $this->precio = $precio;
    } //fin setpre_uni

    public function getPre()
    {
        return $this->precio;
    } //fin getpre_uni




    /*METODOS*/
    public function insert_ped()
    {
        /*crear la conexion e instanciar */
        $llamar = new conexion();
        $llamar1 = $llamar->con();

        /*generar la consulta */
        $consulta = "insert into PEDIDOS(PKCOD_PED,fecha_co,NOM_PRO,descripcion,NUM_PRO,PRECIO,provedor,FKINDEN_EMP) values($this->cod,'$this->fecha','$this->nom','$this->des','$this->num','$this->precio','$this->pro','$this->emp');";

        var_dump($consulta);
        /*procesar consulta */
        $res = mysqli_query($llamar1, $consulta);

        return $res;
    }

    /*metodo modificar */
    public function modificar_ped()
    {
        /*crear la conexion e instanciar */
        $llamar = new conexion();
        $llamar1 = $llamar->con();

        /*generar la consulta */
        $consulta = "update PEDIDOS set PKCOD_PED='$this->cod',fecha_co='$this->fecha',NOM_PRO='$this->nom',descripcion='$this->des',NUM_PRO='$this->num',PRECIO='$this->precio',provedor='$this->pro',FKINDEN_EMP='$this->emp' where PEDIDOS.PKCOD_PED='$this->cod';";

        /*procesar consulta */
        $res = mysqli_query($llamar1, $consulta);

        return $res;
    } //fin modificar



    /*metodo eliminar */
    public function eliminar_emp()
    {
        /*crear la conexion e instanciar */
        $llamar = new conexion();
        $llamar1 = $llamar->con();

        /*generar la consulta */
        $consulta = "delete from PEDIDOS where PKCOD_PED='$this->cod';";

        /*procesar consulta */
        $res = mysqli_query($llamar1, $consulta);

        return $res;
    } //fin ELIMINAR


    public function mostrar_pedi()
    {
        /*crear la conexion*/
        /*instanciar la clase conexion*/
        $llamar = new conexion();
        $llamar1 = $llamar->con();


        /*generar la consulta */
        $consulta = "select cur.PKCOD_PED, cur.fecha_co, cur.NOM_PRO,cur.descripcion,cur.NUM_PRO,cur.PRECIO,sed.provedor,empe.NOM_EMP from PEDIDOS as cur, provedor as sed, EMPLEADOS as empe where cur.provedor = sed.cod_pro AND cur.FKINDEN_EMP = empe.PKIDEN_EMP ORDER BY cur.PKCOD_PED";
        /*procesar consulta */
        $res = mysqli_query($llamar1, $consulta);

        /*retornar una respuesta */
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    } //fin reporte_gral


    public function reporte_codigo($act1)
    {
        /*crear la conexion*/
        /*instanciar la clase conexion*/
        $llamar = new conexion();
        $llamar1 = $llamar->con();
        /*generar la consulta */
        $consulta = "select * from PEDIDOS where PKCOD_PED='$act1'";
        /*procesar consulta */
        $res = mysqli_query($llamar1, $consulta);
        /*respuesta */
        return mysqli_fetch_row($res);
    } //fin metodo reporte_codigo


    public function reporte_combo_emp()
    {
        /*crear la conexion*/
        /*instanciar la clase conexion*/
        $llamar = new conexion();
        $llamar1 = $llamar->con();
        /*generar la consulta */
        $consulta = "select * from EMPLEADOS";
        /*retornar consulta */

        return $combo_emp = mysqli_query($llamar1, $consulta);
    } //fin metodo reporte_combo_sede



    public function reporte_combo_pro()
    {
        /*crear la conexion*/
        /*instanciar la clase conexion*/
        $llamar = new conexion();
        $llamar1 = $llamar->con();
        /*generar la consulta */
        $consulta = "select * from provedor";
        /*retornar consulta */

        return $combo_pro = mysqli_query($llamar1, $consulta);
    } //fin metodo reporte_combo_sede

}//FIN CLASE CLASE_inventario
