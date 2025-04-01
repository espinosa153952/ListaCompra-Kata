<?php

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\ShoppingCart;
use PHPUnit\Framework\TestCase;

class ShoppingKartTests extends TestCase
{
    private ShoppingCart $shoppingCart;

    protected function setUp(): void
    {
        parent::setUp();

        $this->shoppingCart = new ShoppingCart();
    }

    /**
     * @test
     */
    public function givenSomeDifferentProductsWithQuantityEqualsTo1ReturnsTheProductsWithQuantityEqualsToOneSepparatedByCommas(): void
    {
        $this->shoppingCart->addProduct("Pan", 1);
        $this->shoppingCart->addProduct("Leche", 1);
        $result = $this->shoppingCart->addProduct("Agua", 1);

        $this->assertEquals("Pan x1, Leche x1, Agua x1", $result);
    }

    /**
     * @test
     */
    public function givenSomeProductsWithQuantityEqualsTo2ReturnsTheProductWithQuantityEqualsTo2SepparatedByCommas()
    {
        $this->shoppingCart->addProduct("Pan", 2);
        $this->shoppingCart->addProduct("Leche", 2);
        $result = $this->shoppingCart->addProduct("Agua", 2);

        $this->assertEquals("Pan x2, Leche x2, Agua x2", $result);
    }


}