<?php

include __DIR__ . '/Desktop.php';
include __DIR__ . '/Laptop.php';
include __DIR__ . '/Ram.php';
include __DIR__ . '/Storage.php';
include __DIR__ . "/../Traits/Monitor.php";

class Pc
{

    private $type;
    public $image;
    public $brand;
    public $model;
    public $ram;
    public $storage;
    public $cpu;
    public $country;



    public function __construct(string $image, string $brand, string $model, Storage $storage, Ram $ram, string $cpu, string $country)
    {
        $this->image = $image;
        $this->model = $model;
        $this->brand = $brand;
        $this->storage = $storage;
        $this->ram = $ram;
        $this->cpu = $cpu;
        $this->country = $country;

    }


    public function setType()
    {
        return $this->type = 'computer';
    }

}

?>