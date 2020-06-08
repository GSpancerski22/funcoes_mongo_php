<?php
    require_once __DIR__."/../../core/mongo/update.php";

    $id = new \MongoDB\BSON\ObjectId($_POST["id"]);

    $filte = ["_id"=>$id];
    $obj = ["marca"=>$_POST["marca"], "descricao"=>$_POST["descricao"]];

    $collection= "ecommerce.marcas";

    update($filte, $obj, $collection);

    echo "<script>location.href='marcas';</script>";
