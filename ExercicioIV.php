
 <?php
 $mes = 11;
  if(($mes>=1) && ($mes<=12)):

    switch($mes){
        case(1):
        echo "JANEIRO";
        break;
        case(2):
        echo "FEVEREIRO";
        break;
        case(3):
        echo "MARÇO";
        break;
        case(4):
        echo "ABRIL";
        break;
        case(5):
        echo "MAIO";
        break;
        case(6):
        echo "JUNHO";
        break;
        case(7):
        echo "JULHO";
        break;
        case(8):
        echo "AGOSTO";
        break;
        case(9):
        echo "SETEMBRO";
        break;
        case(10):
        echo "OUTUBRO";
        break;
        case(11):
        echo "NOVEMBRO";
        break;
        case(12):
        echo "DEZEMBRO";
        break;
        }


  else: 
    echo "Não existe mês com este número";

  endif;