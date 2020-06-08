<?php
    require_once __DIR__."/../../core/mongo/update.php";

    $id = new \MongoDB\BSON\ObjectId($_POST["id"]);

    $filte = ["_id"=>$id];
    $obj = ["produto"=>$_POST["produto"], "marca"=>$_POST["marca"], "valor"=>$_POST["valor"]];

    $collection= "ecommerce.produtos";

    update($filte, $obj, $collection);

    echo "<script>location.href='produtos';</script>";
