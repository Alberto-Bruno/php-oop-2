<?php
include_once __DIR__ . '/products.php';

class Cat extends Products
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

$cibo = new Cat('Fagottini per Gatti', 7.50, 'https://images.eprice.it/nobrand/0/Lightbox/048/202918048/A176ED7D-D0A0-4D37-8F35-952A9D20472F.jpg', 'Gatti');
$lettiela = new Cat('Lettiela', 25.00, 'https://croci.net/wp-content/uploads/2020/06/Lettiera_gatti_agglomerante.jpg', 'Gatti');
$trasportino = new Cat('Trasporto per Gatti', 18.50, 'https://images.eprice.it/nobrand/0/Lightbox/855/212838855/F1120738-24D3-4F74-8B53-A2F5AA8B1EA0.jpg', 'Gatti');
$tiragraffi = new cat('tiragraffi', 30.00, 'https://cdn.manomano.com/images/images_products/267344/P/11311078_1.jpg', 'Gatti');

$products_cat = [$cibo, $lettiela, $trasportino, $tiragraffi];
