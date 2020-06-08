<?php


require_once __DIR__."/../../core/mongo/findAll.php";
        
$collection = "ecommerce.usuarios";

$cursor = findAll($collection);

require_once __DIR__."/../../views/usuarios/usuarios.php";
