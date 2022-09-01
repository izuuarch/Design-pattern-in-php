<?php
namespace App\Solid;
class Areacalculate{
    public function totalarea(array $rectangles){
        $area = 0;
        foreach($rectangles as $rectangle){
            $area += $rectangle->width * $rectangle->height;
        }
        return $area;
    }
}