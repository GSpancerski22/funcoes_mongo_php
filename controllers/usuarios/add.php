<?php
    require_once __DIR__."/../../core/mongo/findAll.php";
    $collection="ecommerce.usuarios";
    $usuarios=findAll($collection);


    require_once __DIR__."/../../views/usuarios/add.php";
