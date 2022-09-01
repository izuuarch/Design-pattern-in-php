<?php
// for open closed principles
namespace App\Solid;

class Rectangle{
    public $width;
    public $height;

    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}