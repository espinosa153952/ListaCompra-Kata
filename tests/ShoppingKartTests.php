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

        $shoppingCart->addProduct("Pan", 1);
        $shoppingCart->addProduct("Leche", 1);
        $result = $shoppingCart->addProduct("Agua", 1);

        $this->assertEquals("Pan x1, Leche x1, Agua x1", $result);
    }

    /**
     * @test
     */
    public function givenOneProductWithQuantityEqualsTo2ReturnsTheProductWithQuantityEqualsTo2(): void
    {
        $shoppingCart = new ShoppingCart();

        $result = $shoppingCart->addProduct("Agua", 2);

        $this->assertEquals("Agua x2", $result);
    }

    /**
     * @test
     */
    public function givenTwoProductsWithQuantityEqualsTo2ReturnsTheProductWithQuantityEqualsTo2SepparatedByCommas(): void
    {
        $shoppingCart = new ShoppingCart();

        $shoppingCart->addProduct("Pan", 2);
        $result = $shoppingCart->addProduct("Agua", 2);

        $this->assertEquals("Pan x2, Agua x2", $result);
    }

}