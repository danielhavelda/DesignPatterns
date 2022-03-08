<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Interfaces\LoggerFactory;
use DesignPatterns\Creational\FactoryMethod\StdoutLogger;

/**
 * Factory subclass. A superclass || abstract class || Factory interface-ből meríti
 * a létrehozási metódusát (createLogger). A metódusnak eleget téve feladata, hogy
 * egy Logger interface-en alapuló object-et adjon vissza.
 */
class StdoutLoggerFactory implements LoggerFactory
{
  public function createLogger(): StdoutLogger
  {
    return new StdoutLogger();
  }
}