<?php

include __DIR__ . '/Desktop.php';
include __DIR__ . '/Laptop.php';


class Pc
{
    public $image;
    public $brand;
    public $model;
    public $ram;
    public $storage;
    public $cpu;
    public $country;



    public function __construct(string $image, string $brand, string $model, string $ram, string $storage, string $cpu, string $country)
    {
        $this->image = $image;
        $this->model = $model;
        $this->brand = $brand;
        $this->storage = $storage;
        $this->ram = $ram;
        $this->cpu = $cpu;
        $this->country = $country;

    }


}

?>