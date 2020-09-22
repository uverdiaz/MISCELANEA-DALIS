    <?php
    class PERSONA
    {
        public $nom;
        public $ape;
        public $edad;
        public $salario;
        function __construct($nom,$ape,$edad,$salario)
      {
        $this->nom=$nom;
        $this->ape=$ape;
        $this->edad=$edad;
        $this->salario=$salario;    
      }
      public function setNom($nom)
      {
          $this->nom=$nom;
      }//fin setnom_pro
 
      public function getNom()
      {
          return $this->nom;
      }//fin getnom_pro
 
      public function setApe($ape)
      {
          $this->ape=$ape;
      }//fin setnum_pro
 
      public function getApe()
      {
          return $this->ape;
      }//fin getnum_pro
 
 
      public function setEdad($edad)
      {
          $this->edad=$edad;
      }//fin setpre_uni
 
      public function getEdad()
      {
          return $this->edad;
      }//fin getpre_uni
 
      public function setSalario($salario)
      {
          $this->salario=$salario;
      }//fin setfkcod_ped
 
      public function getSalario()
      {
          return $this->salario;
      }//fin getfkcod_ped



    }
