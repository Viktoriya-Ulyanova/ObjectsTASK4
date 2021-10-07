<?php
abstract class Attach{     //прикрепление,крепить,закреплять
    abstract public function setattachAPart(); 
    abstract public function Display();
}

class Robobt1 extends Attach{

    public $attachm ;
    
    public function setattachAPart(){
        echo $this->attachm;
    }
    public function Display(){
        echo "Робот успешно прикрепил часть.<br>";
    }
} 
$robot1 = new Robobt1();
$robot1->Display();

class Child extends Attach{
    
    
    public $attachm ;
    
    public function setattachAPart(){
        echo $this->attachm;
    }

    public function Display(){
        echo "Ребёнок прикрепил желтую часть лего к синей.";
    }
}
$Artyom = new Child();
$Artyom->Display();