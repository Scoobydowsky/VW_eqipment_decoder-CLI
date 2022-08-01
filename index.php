<?php

require "vendor/autoload.php";

$selectLang = <<<LANG
SELECT LANG:
1 : POLSKI
2 : ENGLISH
LANG.PHP_EOL;

echo $selectLang;
$lang= readline("Choose: ");
switch ($lang){
    case 1 :  $controler= new \Scooby\VwEqipmentDecoder\ControlerPL(); break;
    case 2 :  $controler= new \Scooby\VwEqipmentDecoder\ControlerEN(); break;
}
echo $controler->Header();
do{
    $code = $controler->GetCode();
    echo $controler->SearchAndShowCode($code);
    $another = $controler->AskToAnotherCode();
}while($another == true);

