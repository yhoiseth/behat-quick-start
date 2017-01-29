<?php

final class Basket implements Countable
{
    private $products = [];

    public function addProduct($product, $price)
    {
        $this->products[$product] = $price;
    }

    public function getTotalPrice()
    {
        $totalNotIncludingVATAndShipping = array_sum($this->products);
        $totalIncludingVATButNotShipping = $totalNotIncludingVATAndShipping * 1.2;

        if ($totalIncludingVATButNotShipping >= 10) {
            $totalIncludingVATAndShipping = $totalIncludingVATButNotShipping + 2;
        } else {
            $totalIncludingVATAndShipping = $totalIncludingVATButNotShipping + 3;
        }

        return $totalIncludingVATAndShipping;
    }

    public function count()
    {
        return count($this->products);
    }
}
