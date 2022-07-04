<?php 

class Dispenser{

    protected $volume;
    protected $hargaSegelas;
    private static $volumeGelas;
    public $namaMinuman;

    function __construct($vol, $namaMinuman)
    {
        $this->volume = $vol;
        $this->namaMinuman = $namaMinuman;
        
        echo"List Minuman";
        echo"<br>1. es teh jeruk";
        echo"<br>2. es teh mangga";
        echo"<br>3. es teh anggur";
        echo"<br>4. es teh lemon";
        echo"<br>5. es teh gulabatu";

    echo "vol minuman $this->volume";

    }

    public function hargaMinuman()
    {
        if ($this->namaMinuman == "es teh jeruk") {
            $this->hargaPergelas = 3000;
        }
    }
}