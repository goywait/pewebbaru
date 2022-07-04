<?php 
class Mahasiswa
{
var $nama;
var $nim;
var $prodi;
var $th_angkatan;
var $predikatipk;


function __construct($nama, $nim, $prodi, $th_angkatan, $predikatipk){
    $this->nama = $nama;
    $this->nim = $nim;
    $this->prodi = $prodi;
    $this->tahun_angkatan = $th_angkatan;
    $this->ipk = $predikatipk;
}

function ipk_predikat()
{
    if($this->ipk < 2.0)
    return "cukup";
    if($this->ipk >= 2.0 && $this->ipk < 3.0)
    return "baik";
    elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
    return "memuaskan";
    elseif ($this->ipk >= 3.75 && $this->ipk < 4.00)
    return "cumlaude";
}

}

?>