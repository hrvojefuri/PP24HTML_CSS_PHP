<?php

class Proizvod
{
    private $sifra;
    private $zanr;
    private $izvodac;
    private $naziv;
    private $cijena;
    private $izdavackaKuca;
    private $zaliha;

    public function getSifra(){
		return $this->sifra;
	}

	public function setSifra($sifra){
		$this->sifra = $sifra;
	}

	public function getZanr(){
		return $this->zanr;
	}

	public function setZanr($zanr){
		$this->zanr = $zanr;
	}

	public function getIzvodac(){
		return $this->izvodac;
	}

	public function setIzvodac($izvodac){
		$this->izvodac = $izvodac;
	}

	public function getNaziv(){
		return $this->naziv;
	}

	public function setNaziv($naziv){
		$this->naziv = $naziv;
	}

	public function getCijena(){
		return $this->cijena;
	}

	public function setCijena($cijena){
		$this->cijena = $cijena;
	}

	public function getIzdavackaKuca(){
		return $this->izdavackaKuca;
	}

	public function setIzdavackaKuca($izdavackaKuca){
		$this->izdavackaKuca = $izdavackaKuca;
	}

	public function getZaliha(){
		return $this->zaliha;
	}

	public function setZaliha($zaliha){
		$this->zaliha = $zaliha;
	}
}