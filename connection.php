<?php

    $instance = null;


    
    try {

        $localhost = "localhost"; 
        $db_name = "estudos_db";
        $db_username = "dev";
        $db_password = "danilo";

        $instance = new PDO ('mysql:host='.$localhost.';dbname='.$db_name, $db_username, $db_password);
        
    } catch (\Exception $e) {
        echo $e->getMessage();



        die();
    }

?>