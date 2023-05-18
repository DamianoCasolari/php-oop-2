<?php

class Laptop extends Pc
{
    // public $brand;
    // public $model;
    // public $ram;
    // public $storage,;
    // public $cpu;
    // public $country;
    public $type = 'Laptop';
    public $illuminatedKeyboard;
    public $fingerprintReader;
    public $CdPlayer;

    public function __construct(string $image, string $brand, string $storage, string $ram, string $cpu, string $model, string $country, bool $illuminatedKeyboard, bool $fingerprintReader, bool $CdPlayer)
    {
        parent::__construct($image, $brand, $model, $storage, $ram, $cpu, $country);

        $this->illuminatedKeyboard = $illuminatedKeyboard;
        $this->fingerprintReader = $fingerprintReader;
        $this->CdPlayer = $CdPlayer;
    }

}