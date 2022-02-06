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

    private function unosProizvoda()
    {
        $p = new Proizvod();
        $p->setSifra(Unos::ucitajInt('Unesi šifru proizvoda: '));
        $p->setZanr(Unos::ucitajString('Unesi žanr: '));
        $p->setIzvodac(Unos::ucitajString('Unesi izvođača: '));
        $p->setNaziv(Unos::ucitajString('Unesi naziv proizvoda: '));
        $p->setCijena(Unos::ucitajFloat('Unesi cijenu proizvoda: '));
        $p->setIzdavackaKuca(Unos::ucitajString('Unesi izdavačku kuću: '));
        $p->setZaliha(Unos::ucitajInt('Unesi zalihu proizvoda: '));
        $this->podaci[]=$p;
        $this->izbornik();
    }

    private function pregledProizvoda()
    {
        foreach($this->podaci as $p){
            echo $p->getIzvodac() . ': ' . $p->getNaziv() . ', cijena: ' . $p->getCijena() . PHP_EOL;            
        }
        $this->izbornik();
    }

    private function promjenaProizvoda()
    {
        for($i=0;$i<count($this->podaci);$i++){
            echo ($i+1) . '. ' . $this->podaci[$i]->getIzvodac() . ': ' . $this->podaci[$i]->getNaziv() . PHP_EOL;
        }
        $mijenjam = Unos::ucitajInt('Odaberi redni broj za promjenu: ');
        $this->podaci[$mijenjam-1]->setCijena(Unos::ucitajFloat('Unesi novu cijenu: '));
        $this->podaci[$mijenjam-1]->setZaliha(Unos::ucitajString('Unesi novo stanje: '));
        $this->izbornik();
    }

    private function brisanjeProizvoda()
    {
        for($i=0;$i<count($this->podaci);$i++){
            echo ($i+1) . '. ' . $this->podaci[$i]->getIzvodac() . ': ' . $this->podaci[$i]->getNaziv() . PHP_EOL;
        }
        $brisem = Unos::ucitajInt('Unesi redni broj za brisanje: ');
        array_splice($this->podaci,$brisem-1,1);
        $this->izbornik();
    }

    private function naslov()
    {
    echo '#######################' . PHP_EOL;
    echo 'FuriousVortex Proizvodi' . PHP_EOL;
    echo '#######################' . PHP_EOL;
    $this->izbornik();
    }
}