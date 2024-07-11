<?php
class main{
    protected $name = "sheikh";
    private $age= '20';
    public $address;

    public function info(){
     return $this->age;
    }
}

$bashar = new main();
 echo $bashar->info();
?>