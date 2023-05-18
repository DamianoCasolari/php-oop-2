<?php

class Desktop extends Pc
{

    public $keyboard;
    public $mouse;
    public $powerSource;

    public function __construct(string $image, string $brand, Storage $storage, Ram $ram, string $cpu, string $model, string $country, string $keyboard, string $mouse, string $powerSource)
    {
        parent::__construct($image, $brand, $model, $storage, $ram, $cpu, $country);

        $this->keyboard = $keyboard;
        $this->mouse = $mouse;
        $this->powerSource = $powerSource;
    }

    public function setType()
    {
        return $this->type = 'Desktop';
    }
}