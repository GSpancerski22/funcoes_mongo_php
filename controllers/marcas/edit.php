<?php 
    require_once __DIR__."/../../core/mongo/find.php";

    $id = new \MongoDB\BSON\ObjectId($_GET["id"]);

    $filter = ["_id"=>$id];
    $option=[];
    $collection = "ecommerce.marcas";

    $data= find($filter, $option, $collection);

    require_once __DIR__."/../../views/marcas/edit.php";

