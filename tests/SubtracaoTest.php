<?php

namespace Webjump257\CriandoTestsPhp;

use PHPUnit\Framework\TestCase;

class TestSubtracao extends TestCase {

    public function assertPreConditions() : void
    {
        $this->assertTrue(class_exists('Webjump257\CriandoTestsPhp\Subtracao'));
    }

    public function testSubtracaoDoisNumeros() {
        $subtracao = new Subtracao();
        $subtracao->setNum1(100);
        $subtracao->setNum2(50);

        $this->assertEquals(50, $subtracao->subtrair());

        $subtracao = new Subtracao();
        $subtracao->setNum1(50);
        $subtracao->setNum2(25);

        $this->assertEquals(25, $subtracao->subtrair());
    }

  
}