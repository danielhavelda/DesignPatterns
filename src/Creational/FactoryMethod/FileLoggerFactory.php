<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\FileLogger;
use DesignPatterns\Creational\FactoryMethod\Interfaces\LoggerFactory;

/**
 * Factory subclass. A superclass || abstract class || Factory interface-ből meríti
 * a létrehozási metódusát (createLogger). A metódusnak eleget téve feladata, hogy
 * egy Logger interface-en alapuló object-et adjon vissza.
 */
class FileLoggerFactory implements LoggerFactory
{
  protected string $filePath;

  public function __construct(string $filePath)
  {
    $this->filePath = $filePath;
  }

  public function createLogger(): FileLogger
  {
    return new FileLogger($this->filePath);
  }
}