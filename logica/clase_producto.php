<?php

class PRODUCTO
{
    public $nom;
    public $des;
    public $num;
    public $pro;
    public $emp;
    function __construct($nom, $des,$num,$pro,$emp)
    {
        
        $this->nom = $nom;
        $this->des = $des;
        $this->num = $num;
        $this->pro = $pro;
        $this->emp = $emp;
    }
    public function setNom($nom)
     {
         $this->nom=$nom;
     }//fin setnom_pro

     public function getNom()
     {
         return $this->nom;
     }//fin getnom_pro


     public function setDes($des)
     {
         $this->des=$des;
     }//fin setPkcod_pro

     public function getDes()
     {
         return $this->des;
     }//fin getPkcod_pro

     public function setNum($num)
     {
         $this->num=$num;
     }//fin setnum_pro

     public function getNum()
     {
         return $this->num;
     }//fin getnum_pro

     public function setPro($pro)
     {
         $this->pro=$pro;
     }//fin setPkcod_pro

     public function getPro()
     {
         return $this->pro;
     }//fin getPkcod_pro

     public function setEmp($emp)
     {
         $this->emp=$emp;
     }//fin setfkcod_ped

     public function getEmp()
     {
         return $this->emp;
     }//fin getfkcod_ped

}
