<?php

namespace Scooby\VwEqipmentDecoder;

class ControlerEN implements ControlerInterface
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
        Translated by: Tomasz @Scoobydowsky Woytkowiak
        https://github.com/Scoobydowsky
        TRANSLATOR. PHP_EOL;
        return $output . $author . $translator;
    }

    public function GetCode(): string
    {
        return readline("Write Equipment code: ");
    }

    public function SearchAndShowCode(string $Code)
    {
        echo "CODE - DESCRIPTION".PHP_EOL;
        //TODO fstream open to json file
        //TODO foreach loop for search
        if($Code === "xxx"){
            $description = "Find Description";
        }else{
            $description= "Code undefined";
        }
        return $Code." - ".$description.PHP_EOL;
    }

    public function AskToAnotherCode()
    {
        do{
            $question = readline("Do you want search next code ? (y/n)");
            $check = ($question == "y" || $question == "n") ? $check = 1 : $check = 0 ;
        }while ($check == 0);
        if($check == 1){
            if($question == "y"){
                $returnStatus = true;
            }else{
                $returnStatus = false;
            }
        }
        return $returnStatus;
    }
}