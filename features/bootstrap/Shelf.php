<?php

final class Shelf
{
    private $products = [];

    public function setProductPrice($product, $price)
    {
        $this->products[$product] = $price;
    }

    public function getProductPrice($product)
    {
        return $this->products[$product];
    }
}
