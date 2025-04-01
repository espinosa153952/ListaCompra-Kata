<?php

namespace Deg540\StringCalculatorPHP;

class ShoppingCart
{
    private string $products = "";

    public function addProduct(string $product, int $quantity): string
    {
        if($this->products !== "")
        {
            $this->products .= ", ";
        }
        $this->products .= "$product x$quantity";

        return $this->products;
    }
}