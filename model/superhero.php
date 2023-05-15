<?php

require_once 'Conexion.php';

class SuperHero extends Conexion{

  private $conexion;

  public function __CONSTRUCT(){
    $this->conexion = parent::getConexion();
  }

  public function getSuperHeroList($publisherId){
    try{
      $consulta = $this->conexion->prepare("CALL spu_superhero_full(?)");
      $consulta->execute(array($publisherId));

      return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
      die ($e->getMessage());
    }
  }

}

?>