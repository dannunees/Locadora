<?php


$paises = ['Brasil','EUA', 'Alemanha', 'Japão', 'Canadá'];

var_dump($paises);

echo "<hr/>Quantidade : ". sizeof($paises)."<hr/>";


for($contador=0; $contador < sizeof($paises); $contador++){
    echo "Posição $contador: país ".$paises[$contador]."<br/>";
}

echo "<hr/>";

foreach($paises as $pais){
    echo "--> ".$pais." <br/>";
}

echo "<hr/>";
#---------------------------------
$idades = [12,false, 34,67,35,"Dez", 40, 41, true, 12];
foreach($idades as $idade){
    echo "Você tem $idade anos.<br/>";
}

# TRUE: 1 
# FALSE: 0

?>