<?php

require_once '../model/superhero.php';

if (isset($_POST['operacion'])){

  $superhero = new SuperHero();

  if ($_POST['operacion'] == 'listar'){
    $datosObtenidos = $superhero->getSuperHeroList($_POST['publisherId']);
    echo json_encode($datosObtenidos);
  }

}

?>