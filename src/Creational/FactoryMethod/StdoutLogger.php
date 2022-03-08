<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Interfaces\Logger;

/**
 * Product class, mely a Product-ot leíró interface-t implementálja.
 */
class StdoutLogger implements Logger
{
  public function log(string $msg): void
  {
    echo $msg;
  }
}