<?php

namespace DesignPatterns\Creational\FactoryMethod\Interfaces;

use DesignPatterns\Creational\FactoryMethod\Interfaces\Logger;

/**
 * Az az interface || superclass || abstract class, melyből a különböző subclass-variánsok merítik a létrehozási metódusukat.
 * A létrehozandó objectet egy általános interface-el írja le, melyet a subclassok kötelezően
 * vissza kell adjanak, kiegészítve a saját implementációjukkal.
 */
interface LoggerFactory
{
  public function createLogger(): Logger;
}