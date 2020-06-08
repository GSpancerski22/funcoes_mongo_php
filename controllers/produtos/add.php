<?php
    require_once __DIR__."/../../core/mongo/findAll.php";
    $collection="ecommerce.marcas";
    $marcas=findAll($collection);


    require_once __DIR__."/../../views/produtos/add.php";
