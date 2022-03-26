<?php

namespace DesignPatterns\Structural\Bridge;

use DesignPatterns\Structural\Bridge\Interfaces\LogOutputterInterface;

/**
 * Concrete Implementation Class
 * Konkrét implementációt tartalmaz, mely megfelel az Implementation Layer Interface-nek.
 * Ebben a példában az output kifejezetten console-ba való kiírást jelent.
 */
class ConsoleLogOutputter implements LogOutputterInterface
{
  public function output(string $message): void
  {
    echo $message.PHP_EOL;
  }
}