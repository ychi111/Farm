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
    // сколько может дать яйца курица
    public function getProduct(){
        return rand(0,1);
    }

}

/**
 * Класс корова
 */
class cow extends animal{
    // сколько может дать корова молоко
    public function getProduct(){
        return rand(8, 12);
    }
}  

?>
