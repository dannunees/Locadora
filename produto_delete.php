<?php

    if( !isset($_GET['id']) || $_GET['id'] == '' || !is_numeric($_GET['id']) ) {
        echo "Informe um produto para continuar.";
        return;
    }
    
    
    try {

        $produto_id = $_GET['id'];
        
        require_once 'connection.php';
        
        $sql = "DELETE FROM 
                    abc_produtos 
                WHERE produto_id = :id ";
        
        $ps = $instance->prepare($sql); 
        $ps->bindValue(':id', $produto_id, PDO::PARAM_INT);
        
        $ps->execute();
        
        echo "Produto removido com sucesso! <br><br>";
        echo "<a href='index.php'> <b>Voltar</b> </a>";
        
    } catch (\Exception $e) {
        print $e->getMessage();
    }
    
    