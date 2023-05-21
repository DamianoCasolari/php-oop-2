<?php

trait Monitor
{
    private $size;

    public function set_size($size)
    {
        $this->size = $size . " inches";
    }
    public function get_size()
    {
        return $this->size;
    }
}