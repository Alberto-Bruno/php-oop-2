<?php
include_once __DIR__ . '/products.php';

class Dog extends Products
{
    public $type;
    public $poster;

    public function __construct($name, $price, $poster, $type)
    {
        $this->type = $type;
        $this->poster = $poster;
        parent::__construct($name, $price);
    }
}
