<?php

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\ShoppingCart;
use PHPUnit\Framework\TestCase;

class ShoppingKartTests extends TestCase
{
    /**
     * @test
     */
    public function givenOneProductReturnsSameProduct()
    {
        $shoppingCart = new ShoppingCart();

        $result = $shoppingCart->addProduct("Pan");

        $this->assertEquals("Pan x1", $result);
    }

}