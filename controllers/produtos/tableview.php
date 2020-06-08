<?php

    require_once __DIR__."/../../core/mongo/findAll.php";
    
    $collection = "ecommerce.produtos";

    $produtos = findAll($collection);

    require_once __DIR__."/../../views/produtos/produtos.php";
