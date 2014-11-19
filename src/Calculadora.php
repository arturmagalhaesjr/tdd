<?php

/**
 * @author Artur Magalhães <nezkal@gmail.com>
 */
class Calculadora
{
    public function soma($a, $b)
    {
        if(is_string($a) || is_string($b)) {
            throw new \InvalidArgumentException('Argumento inválido, esperado um inteiro');
        }

        return $a + $b;
    }
} 