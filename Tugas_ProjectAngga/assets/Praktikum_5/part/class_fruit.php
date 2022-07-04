<?php
//membuat class fruit
class Fruit
{
    //member class
    public $name;
    protected $color;
    private $weight;

    function set_name($n)
    {
        $this->name = $n;
    }

    protected function set_color($n)
    {
        $this->color = $n;
    }

    private function set_weight($n)
    {
        $this->weight = $n;
    }
}
$manggo = new Fruit();
$manggo->set_name('Manggo'); // OK
$manggo->set_color('Yellow'); // ERROR
$manggo->set_weight('300'); // ERROR

?>