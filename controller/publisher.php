<?php

require_once '../model/publisher.php';

if (isset($_POST['operacion'])){

  $publisher = new Publisher();
  
  if ($_POST['operacion'] == 'listar'){
    $datosObtenidos = $publisher->getPublisherList();
    echo json_encode($datosObtenidos);

  }

}