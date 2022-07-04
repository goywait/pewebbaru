<?php

class AccountBank extends Account
{
    public $nasabah;

    function __construct($nomor_rekening, $nasabah, $saldo)
    {
        parent::__construct($nomor_rekening, $saldo);
        $this->nasabah = $nasabah;
    }
}

class Account
{
    public $nomor;
    public $saldo;

    function __construct($nomor_rekening, $saldo)
    {
        $this->nomor = $nomor_rekening;
        $this->saldo = $saldo;
    }
}

?>