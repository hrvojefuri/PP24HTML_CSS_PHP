<?php

class Program
{

    private $podaci;

    public function __construct()
    {
        $this->podaci=[];
        $this->naslov();
    }

    private function naslov()
{
    echo '#######################' . PHP_EOL;
    echo 'FuriousVortex Proizvodi' . PHP_EOL;
    echo '#######################' . PHP_EOL;
}
}