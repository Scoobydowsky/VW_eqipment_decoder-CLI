<?php

namespace Scooby\VwEqipmentDecoder;

class ControlerPL implements ControlerInterface
{

    public function Header(): string
    {
        $output = <<<LOGO

        ┏┓  ┏┳┓┏┓┏┓┏━━━┓          ┏┓
        ┃┗┓┏┛┃┃┃┃┃┃┗┓┏┓┃          ┃┃
        ┗┓┃┃┏┫┃┃┃┃┃ ┃┃┃┣━━┳━━┳━━┳━┛┣━━┳━┓
         ┃┗┛┃┃┗┛┗┛┃ ┃┃┃┃┃━┫┏━┫┏┓┃┏┓┃┃━┫┏┛
         ┗┓┏┛┗┓┏┓┏┛┏┛┗┛┃┃━┫┗━┫┗┛┃┗┛┃┃━┫┃
          ┗┛  ┗┛┗┛ ┗━━━┻━━┻━━┻━━┻━━┻━━┻┛
        LOGO. PHP_EOL;
        $author = 'Stworzone przez: Tomasz @Scoobydowsky Woytkowiak' . PHP_EOL . "https://github.com/Scoobydowsky" . PHP_EOL;

        $translator = <<<TRANSLATOR
        Przetlumaczone przez: Tomasz @Scoobydowsky Woytkowiak
        https://github.com/Scoobydowsky
        TRANSLATOR. PHP_EOL;
        $alert = 'Uwaga baza jest tylko w jezyku angielskim'.PHP_EOL;
        return $output . $author . $translator.$alert;
    }

    public function GetCode(): string
    {
        return strtoupper(readline("Podaj kod wyposazenia: "));
    }

    public function SearchAndShowCode(string $Code):string
    {
        echo "KOD - OPIS".PHP_EOL;
        if(file_exists('src/CodeListPL.json')){
            $file = file_get_contents('src/CodeListPL.json');
        }else{
            $file = file_get_contents('src/CodeListEN.json');
        }
        $codeList = json_decode($file, true);
        $description = 'Nie znaleziono opisu';
        foreach ($codeList as ['code' => $codeOnArray, 'description' => $descriptionOnArray]) {
            if ($codeOnArray === $Code){
                $description = $descriptionOnArray;
                break;
            }
        }
        return $Code." - ".$description.PHP_EOL;
    }

    public function AskToAnotherCode():bool
    {
        do{
            $question = readline("Chcesz podac nastepny kod ? (t/n)");
            $check = ($question == "t" || $question == "n") ? $check = 1 : $check = 0 ;
        }while ($check == 0);
        if($check == 1){
            if($question == "t"){
                $returnStatus = true;
            }else{
                $returnStatus = false;
            }
        }
        return $returnStatus;
    }
}