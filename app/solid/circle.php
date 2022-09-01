<?php
// for open closed principles
namespace App\Solid;

class Circle{
    public $radius;
    public $height;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
}