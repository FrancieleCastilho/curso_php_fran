<?php

$personalidades = array(
"Isaac Newton",
"Sidarta Gautama", 
"Johannes Gutenberg", 
"Cristovão Colombo", 
"Albert Einstein", 
"Louis Pasteur",
"Galileu Galilei", 
"Aristóteles", 
"Euclides",
"Charles Darwin",
"Nicolau Copérnico", 
"Antoine Lavoisier",
"Constantino",
"James Watt",
"Michael Faraday",
"James Clerk Maxwell",
"George Washington",
"Karl Marx, filósofo",
"Adam Smith",
"William Shakespeare");

echo "Itens ordenados<br><br>";

foreach($personalidades as $personalidade){
    echo $personalidade . "<br>";
}
asort($personalidades);
echo "<br><br>";
echo "Itens em ordem crescente<br><br>";

foreach($personalidades as $personalidade){
    echo $personalidade . "<br>";
}
arsort($personalidades);
echo "<br><br>";
echo "Itens em ordem decrescente<br><br>";

foreach($personalidades as $personalidade){
    echo $personalidade . "<br>";
}

shuffle($personalidades);
echo "<br><br>";
echo "Itens desordenados<br><br>";

foreach($personalidades as $personalidade){
    echo $personalidade . "<br>";
}