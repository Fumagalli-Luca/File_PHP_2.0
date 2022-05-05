<?php

if(file_exists("Testo4.txt") && is_file("Testo4.txt")){

$x=1;

$f=fopen("Testo4.txt","r");

while(!feof($f)){

    echo fgets($f)."</br>";

}

fclose($f);
$x++;
$stream=fopen("Testo4.txt","w");
fwrite($stream,$x);
fclose($stream);

}

?>