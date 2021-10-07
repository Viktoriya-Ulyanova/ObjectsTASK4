<?php

interface SwOn{     //лампа вкл
    public function setOn();
}
interface SwOff{    //лампа выкл
    public function setOff();
}
interface Light{    //лампа светит
    public function setLighting();
}
interface Display{
    public function Display();
}
interface Lamp_All extends SwOn, SwOff, Light, Display{}

class Lamp implements Lamp_All{   
    public $LEDs = ' светит ';  
    public $switchOn = ' включена ';
    public $switchOff = ' выключена';

    public function setOn(){
        echo ($this->switchOn);
    }
    public function setOff(){
        echo ($this->switchOff);
    }
    public function setLighting(){
        echo ($this->LEDs);
    }
    public function Display(){
        echo ('С 7:00 РМ. до 6:00 АМ. лампа '.$this->switchOn.'<br>'. 'Она хорошо '.$this->LEDs);    
    }
} 

$lamp = new Lamp();
$lamp->Display();

