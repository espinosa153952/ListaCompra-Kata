<?php

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\ShoppingCart;
use PHPUnit\Framework\TestCase;

class ShoppingKartTests extends TestCase
{
    /**
     * @test
     */
    public function givenOneProductReturnsSameProductWithQuantityEqualsToOne(): void
    {
        $shoppingCart = new ShoppingCart();

        $result = $shoppingCart->addProduct("Pan");

        $this->assertEquals("Pan x1", $result);
    }

    /**
     * @test
     */
    public function givenTwoDifferentProductReturnsTheProductsWithQuantitiesEqualsToOneSepparatedByCommas(): void
    {
        $shoppingCart = new ShoppingCart();

        $shoppingCart->addProduct("Pan");
        $result = $shoppingCart->addProduct("Leche");

        $this->assertEquals("Pan x1, Leche x1", $result);
    }
}