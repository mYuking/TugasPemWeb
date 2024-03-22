<?php

class Mahasiswa {
    private $nama;
    private $nilai;

    public function __construct($nama, $nilai){
        $this->nama = $nama;
        $this->nilai = $nilai;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getNilai(){
        return $this->Tinggibadan;
    }

    public function hasilLulus(){
        return $this->nilai >= 170 ? 'Tinggi' : 'Pendek';
    }

   
    
}