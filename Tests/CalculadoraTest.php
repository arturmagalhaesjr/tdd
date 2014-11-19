<?php

/**
 * @author Artur Magalhães <nezkal@gmail.com>
 */
class CalculadoraTest extends PHPUnit_Framework_TestCase
{
    public function testSoma()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->soma(5, 10);

        $this->assertEquals(15, $resultado);
    }

    public function testSomaWithInvalidArgument()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $calculadora = new Calculadora();
        $resultado = $calculadora->soma(5, "10");

        $this->assertEquals(15, $resultado);
    }
}
 