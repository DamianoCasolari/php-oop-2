<?php

trait Monitor
{
    private $size;

    public function set_size($size)
    {
        if (!is_numeric($size)) {
            throw new Exception("************* the possibly value of size it's only a number *************");
        }

        return $this->size = $size . " inches";
    }
    public function get_size()
    {
        return $this->size;
    }
}