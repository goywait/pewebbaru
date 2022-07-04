<?php

class Account
{
    public $nama;
    public $saldo;
    public $nomor_rekening;

    public function __construct($nam, $sal, $rek)
    {
        $this->nama = $nam;
        $this->saldo = $sal;
        $this->nomor_rekening = $rek;
    }


    public function deposit($nominal)
    {
        $this->saldo += $nominal;
    }

    public function withdraw($jumlah)
    {
        $this->saldo -= $jumlah;
    }

    public function cetak()
    {

        echo "No Account : " . $this->nomor_rekening . "<br>";
        echo "Atas Nama : <b>" . $this->nama . "</b><br>";
        echo "Saldo Anda Sebesar : <b>" . $this->saldo . "</b><br><br>";

        // echo "Rekening Atas Nama <b>" . $this->nama . "</b> <br> Mempunyai Saldo Sebesar " . $this->saldo . "<br><br>";
    }
}

class AccountBank extends Account
{
    public function customerTransfer(Account $nam, $duit)
    {
        $this->saldo -= $duit;
        $nam->deposit($duit);
    }
}

$jupri = new AccountBank('jupri', 6000000, 'C001');
$saprudin = new AccountBank('saprudin', 5350000, 'C002');
$jaka = new AccountBank('jaka', 2500000, 'C003');

echo "Saldo awal <br>";

$jupri->cetak();
$jupri->deposit(1000000);
echo "Saldo deposit 1juta <br>";
$jupri->cetak();

echo "Saldo awal <br>";
$saprudin->cetak();
$jupri->customerTransfer($saprudin, 1500000);
echo "Setelah Transfer 1,5jt oleh jupri <br>";
$saprudin->cetak();

echo "Kemudian saprudin menarik uangnya 2,5 jt <br>";
$saprudin->withdraw(2500000);
$saprudin->cetak();