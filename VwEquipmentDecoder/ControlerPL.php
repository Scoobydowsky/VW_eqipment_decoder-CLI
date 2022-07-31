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
        $author = 'Made by: Tomasz @Scoobydowsky Woytkowiak' . PHP_EOL . "https://github.com/Scoobydowsky" . PHP_EOL;
        $translator = <<<TRANSLATOR
        Przetlumaczone przez: Tomasz @Scoobydowsky Woytkowiak
        https://github.com/Scoobydowsky
        TRANSLATOR. PHP_EOL;
        return $output . $author . $translator;
    }

    public function GetCode(): string
    {
        return readline("Podaj Kod wyposazenia: ");
    }

    public function SearchCode(string $Code):string
    {
        echo "KOD - OPIS".PHP_EOL;
        if($Code === "xxx"){
            $description = "Znalazlem opis";
        }else{
            $description= "Nie znaleziono opisu";
        }
        return $Code." - ".$description.PHP_EOL;
    }

    public function ShowCode(array $output)
    {
        // TODO: Implement ShowCode() method.
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