<?php

   

    $response_list = null; 

    try {
        
        
        require_once 'connection.php';
        

        $sql = "SELECT 
                    produto_id
                    , produto_desc 
                FROM 
                    abc_produtos 
                ORDER BY 
                    produto_desc ASC ";

        $ps = $instance->prepare($sql); 
        $ps->execute();
        
        
        $response_list = $ps->fetchAll();
        
        
    } catch(\Exception $e) {
        var_dump($e->getMessage());
    }

