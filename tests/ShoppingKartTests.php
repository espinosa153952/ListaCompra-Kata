<?php

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\ShoppingCart;
use PHPUnit\Framework\TestCase;

class ShoppingKartTests extends TestCase
{
    /**
     * @test
     */
    public function givenSomeDifferentProductsWithQuantityEqualsTo1ReturnsTheProductsWithQuantityEqualsToOneSepparatedByCommas(): void
    {
        $shoppingCart = new ShoppingCart();

        $shoppingCart->addProduct("Pan");
        $shoppingCart->addProduct("Leche");
        $result = $shoppingCart->addProduct("Agua");

        $this->assertEquals("Pan x1, Leche x1, Agua x1", $result);
    }



}