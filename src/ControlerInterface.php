<?php

namespace Scooby\VwEqipmentDecoder;

interface ControlerInterface
{
    public function Header():string;
    public function GetCode():string;
    public function SearchAndShowCode(String $Code);
    public function AskToAnotherCode();
}