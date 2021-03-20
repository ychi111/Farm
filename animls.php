<?php

abstract class animal {
    public $animalId;
    public abstract function getProduct();
    public function getAnimalType()
    {
        return static::class;
    }
    public function __construct(id)
    {
        $this->animalId = id;
    }
}

/**
 * Класс курица
 */
class chicken extends animal{
    // коснтруктор класса, задаем уникальный номер
    function __construct() {
        // Задаем уникальный номер
        $this->idAnimal=parent::$id++;
        //Задаем уникальный номер
        // print "chicken id-".$this->idAnimal." \n";
    }
    // сколько может дать яйца курица
    public function getProduct(){
        return rand(0,1);
    }

}

/**
 * Класс корова
 */
class cow extends animal{
    // коснтруктор класса, задаем уникальный номер
    function __construct() {
        // задаем номер уникальный
        $this->idAnimal=parent::$id++;
        // print "Конструктор класса cow". $this->idAnimal." \n";
    }

    // сколько может дать корова молоко
    public function getProduct(){
        return rand(8, 12);
    }
}  

?>
