<?php
    function update($filter, $obj, $collection){

        require_once __DIR__."/manager.php";

        $db = new \MongoDB\Driver\BulkWrite;
        $db->update($filter, $obj);

        $manager->executeBulkWrite($collection, $db);

    }
