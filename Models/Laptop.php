<?php


class Laptop extends Pc
{
    use Monitor;
    public $illuminatedKeyboard;
    public $fingerprintReader;
    public $CdPlayer;

    public function __construct(string $image, string $brand, Storage $storage, Ram $ram, string $cpu, string $model, string $country, bool $illuminatedKeyboard, bool $fingerprintReader, bool $CdPlayer)
    {
        parent::__construct($image, $brand, $model, $storage, $ram, $cpu, $country);

        $this->illuminatedKeyboard = $illuminatedKeyboard;
        $this->fingerprintReader = $fingerprintReader;
        $this->CdPlayer = $CdPlayer;
    }

    public function setType()
    {
        return $this->type = 'Laptop';
    }

}