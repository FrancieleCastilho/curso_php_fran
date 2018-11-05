
<?php
$salario = 2200;

if ($salario <= 1000){
    echo "Você não paga imposto";
}elseif($salario  <= 1500){
    echo "Você paga 10% de imposto";
}elseif($salario <=2000){
    echo "Você paga 15% de imposto";
}else{
    echo "Você paga 20% de imposto";
}


