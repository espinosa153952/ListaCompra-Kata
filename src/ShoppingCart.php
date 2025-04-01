<?php

namespace Deg540\StringCalculatorPHP;

class ShoppingCart
{
    private array $products = [];

    public function addProduct(string $product, int $quantity): string
    {
        if(isset($this->products[$product]))
        {
            $this->products[$product] += $quantity;
        }
        else
        {
            $this->products[$product] = $quantity;
        }



        $productsSepparatedByCommas = "";
        foreach($this->products as $product => $quantity)
        {
            if($productsSepparatedByCommas !== "")
            {
                $productsSepparatedByCommas .= ", ";
            }
            $productsSepparatedByCommas .= "$product x$quantity";
        }

        return $productsSepparatedByCommas;
    }
}