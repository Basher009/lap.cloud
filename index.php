<?php
class main{
    public $name;
    public $age;
    public $address;

    public function info(){
     return $this->name = 'bashar';
    }
}

$bashar = new main();
 echo $bashar->info();
?>