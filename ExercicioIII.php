
<?php
$nome = "Franciele";
$sexo = 'FEMININO';
$idade = 21;
 if (($sexo == 'FEMININO') && ($idade < 25)):
     echo $nome . " ACEITA ";
 else:
     echo $nome . " NÃO ACEITA ";
 endif;