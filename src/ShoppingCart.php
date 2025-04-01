<?php

namespace Deg540\StringCalculatorPHP;

class ShoppingCart
{
    private string $products = "";

    public function addProduct(string $product): string
    {
        if($this->products !== "")
        {
            $this->products .= ", ";
        }
        $this->products .= "$product x1";

        return $this->products;
    }
}