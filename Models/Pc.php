<?php
include __DIR__ . "/Traits/Monitor.php";

class Pc
{
    use Monitor;
    private $type;
    public $image;
    public $brand;
    public $model;
    public $ram;
    public $storage;
    public $cpu;
    public $country;



    public function __construct($monitorSize, string $image, string $brand, string $model, Storage $storage, Ram $ram, string $cpu, string $country)
    {
        $this->image = $image;
        $this->model = $model;
        $this->brand = $brand;
        $this->storage = $storage;
        $this->ram = $ram;
        $this->cpu = $cpu;
        $this->country = $country;
        try {
            $this->set_size($monitorSize);
        } catch (Exception $e) {
            echo 'Eccezione: ' . $e->getMessage();
        }

    }


    public function setType()
    {
        return $this->type = 'computer';
    }

}

?>