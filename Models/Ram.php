<?php
class Ram
{
    public $capacity;
    public $type;

    public function __construct(string $capacity, string $type)
    {
        $this->capacity = $capacity;
        $this->type = $type;
    }
}