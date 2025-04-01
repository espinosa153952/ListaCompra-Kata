<?php

namespace Deg540\StringCalculatorPHP;

class ShoppingCart
{
    private array $products = [];

    public function addProduct(string $order): string
    {
        $explodedOrder = explode(' ', trim($order));
        $action = $explodedOrder[0];
        $product = $explodedOrder[1];
        $quantity = $explodedOrder[2];
        if(str_contains(strtolower($action), 'añadir'))
        {
            if($this->productIsInShoppingCart($product))
            {
                $this->products[$product] += $quantity;
            }
            else
            {
                $this->products[$product] = $quantity;
            }

            return $this->productsToStringOfProductsWithQuantitiesSepparatedByCommas();
        }

        return "";
    }

    private function productsToStringOfProductsWithQuantitiesSepparatedByCommas(): string
    {
        $productsSepparatedByCommas = "";
        foreach ($this->products as $product => $quantity)
        {
            if ($productsSepparatedByCommas !== "")
            {
                $productsSepparatedByCommas .= ", ";
            }
            $productsSepparatedByCommas .= "$product x$quantity";
        }

        return $productsSepparatedByCommas;
    }

    private function productIsInShoppingCart(string $product): bool
    {
        return isset($this->products[$product]);
    }
}