<?php

class Unos
{
    public static function ucitajInt(
        $poruka='Učitaj cijeli broj: ',
        $porukaGreska='Nisi upisao cijeli broj')
    {
        $terminal = fopen('php://stdin','r');
        while(true){
            echo $poruka;
            $unosKorisnika = (int)fgets($terminal);
            if($unosKorisnika!=0){
                return $unosKorisnika;
            }
            echo $porukaGreska . PHP_EOL;
        }        
    }

    public static function ucitajFloat(
        $poruka='Učitaj decimalni broj: ',
        $porukaGreska='Nisi upisao decimalni broj.')
    {
        $terminal = fopen('php://stdin','r');
        while(true){
            echo $poruka;

            $s=fgets($terminal);

            $s = trim($s); 
            $s = str_replace(' ','',$s);
            $s = str_replace('.','',$s);
            $s = str_replace(',','.',$s);

            $unosKorisnika = (float)$s;
            
            if($unosKorisnika!=0){
                return $unosKorisnika;
            }
            echo $porukaGreska . PHP_EOL;
        }
    }

    public static function ucitajString(
        $poruka='Učitaj tekst: ',
        $porukaGreska='Nisi upisao tekst')
    {
        $terminal = fopen('php://stdin','r');
        while(true){
            echo $poruka;
            $unosKorisnika = fgets($terminal);
            $unosKorisnika = preg_replace("/\r|\n/", "", $unosKorisnika);
            if(strlen($unosKorisnika)>0){
                return $unosKorisnika;
            }
            echo $porukaGreska . PHP_EOL;
        }        
    }
}