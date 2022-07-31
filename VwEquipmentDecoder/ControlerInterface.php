<?php

namespace Scooby\VwEqipmentDecoder;

interface ControlerInterface
{
    public function Header():string;
    public function GetCode():string;
    public function SearchCode(String $Code);
    public function ShowCode(array $output);
    public function AskToAnotherCode();
}