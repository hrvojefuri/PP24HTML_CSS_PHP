<?php

class Program
{

    private $podaci;

    public function __construct()
    {
        $this->podaci=[];
        $this->naslov();
    }

    private function izbornik()
    {
        echo '1. Pregled proizvoda' . PHP_EOL;
        echo '2. Unos proizvoda' . PHP_EOL;
        echo '3. Promjena proizvoda' . PHP_EOL;
        echo '4. Brisanje proizvoda' . PHP_EOL;
        echo '5. Izlaz iz programa' . PHP_EOL;
        $izbor=0;
        while(true){
            $izbor = Unos::ucitajInt('Odaberi stavku izbornika: ','Nisi unio cijeli broj');
            if($izbor<1 || $izbor>5){
                echo 'Nisi unio moguć izbor' . PHP_EOL;
                continue;
            }
            break;
        }
        switch($izbor){
            case 1:
                $this->pregledProizvoda();
                break;
            case 2:
                $this->unosProizvoda();
                break;
            case 3:
                $this->promjenaProizvoda();
                break;
            case 4:
                $this->brisanjeProizvoda();
                break;
            case 5:
                echo 'Hvala na korištenju aplikacije, doviđenja!';
        }
    }

    private function naslov()
{
    echo '#######################' . PHP_EOL;
    echo 'FuriousVortex Proizvodi' . PHP_EOL;
    echo '#######################' . PHP_EOL;
    $this->izbornik();
}
}