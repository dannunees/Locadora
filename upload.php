<?php
 $nome_temporario=$_FILES["arquivo"]["tmp_name"];
 $nome_real=$_FILES["arquivo"]["name"];
 if (copy($nome_temporario,"arquivo/$nome_real")){
      echo "Upload do arquivo: $nome_real efetuado com êxito";
 }
 else{
      echo "Erro ao fazer o upload do arquivo: $nome_real";
 }

?>