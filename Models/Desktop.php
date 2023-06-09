<?php
// include __DIR__ . "/Traits/Monitor.php";
class Desktop extends Pc
{
    // use Monitor;
    public $keyboard;
    public $mouse;
    public $powerSource;

    public function __construct($monitorSize, string $image, string $brand, Storage $storage, Ram $ram, string $cpu, string $model, string $country, string $keyboard, string $mouse, string $powerSource)
    {
        parent::__construct($monitorSize, $image, $brand, $model, $storage, $ram, $cpu, $country);

        $this->keyboard = $keyboard;
        $this->mouse = $mouse;
        $this->powerSource = $powerSource;
    }

    public function setType()
    {
        return $this->type = 'Desktop';
    }
}