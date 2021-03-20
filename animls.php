<?php

abstract class animal{
    // Статическая переменая для хранения ключа
    static $id = 1;
    // номер животного
    public $idAnimal=0;
    // сколько дает
    public abstract function getProduct();
    // вернуть
    public function getAnimalType()
    {
        return static::class;
    }
}

?>
