<?php
class Object {
    private $name;
    private $bonus;
    private $feature;

    public function __construct($name,$bonus,$feature){
        $this->name=$name;
        $this->bonus=$bonus;
        $this->feature=$feature;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setBonus($bonus){
        $this->bonus = $bonus;
    }
    public function getBonus(){
        return $this->bonus;
    }

    public function setFeature($feature){
        $this->feature = $feature;
    }
    public function getFeature(){
        return $this->feature;
    }

}