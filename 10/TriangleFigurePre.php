<?php

class TriangleFigure
{

    // difine base, height propaty
    public float $base;
    public float $height;

    public function getArea(): float
    {
        return $this->base * $this->height / 2;
    }
}
