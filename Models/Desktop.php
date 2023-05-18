<?php

class Desktop extends Pc
{
    // public $brand;
    // public $model;
    // public $ram;
    // public $storage,;
    // public $cpu;
    // public $country;
    public $type = 'Desktop';
    public $keyboard;
    public $mouse;
    public $powerSource;

    public function __construct(string $image, string $brand, string $storage, string $ram, string $cpu, string $model, string $country, string $keyboard, string $mouse, string $powerSource)
    {
        parent::__construct($image, $brand, $model, $storage, $ram, $cpu, $country);

        $this->keyboard = $keyboard;
        $this->mouse = $mouse;
        $this->powerSource = $powerSource;
    }

}