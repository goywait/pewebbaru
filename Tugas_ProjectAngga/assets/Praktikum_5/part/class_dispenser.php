<?php

class Dispanser
{

    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas = 250;
    public $namaMinuman;


    public function isi($vol)
    {
        $this->volume = $vol;
    }

    public function hargaSegelas($harga)
    {
        $this->hargaSegelas = $harga;
    }

    public function namaMinum($nama)
    {
        $this->namaMinuman = $nama;
    }

    public function beli()
    {
        $this->volume -= $this->volumeGelas;

        if ($this->volume >= 0) {
            echo "Pembelian <b>" . $this->namaMinuman . "</b> Anda Berhasil <br>";
        } else {
            echo "Maaf, Stok " . $this->namaMinuman . "Habis <br>";
        }
    }
}

$minuman = new Dispanser();
$minuman->isi(1000);
$minuman->hargaSegelas(5000);
$minuman->namaMinum("PoP Ice");

$minuman->beli();

?>