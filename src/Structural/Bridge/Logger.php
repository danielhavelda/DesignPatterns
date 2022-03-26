<?php

namespace DesignPatterns\Structural\Bridge;

use DesignPatterns\Structural\Bridge\Interfaces\LogOutputterInterface;

/**
 * Abstraction Layer Class
 * Az Abstraction Layer adja a high-level logikáját a kódnak.
 * Az aktuális munka low-level részét az Implementation layer végzi, amit
 * egy közös interface-el határozunk meg, majd injektáljuk a lentebb látható módon. (LogOutputterInterface)
 */
abstract class Logger
{
  protected LogOutputterInterface $LogOutputter;

  public function __construct(LogOutputterInterface $LogOutputter)
  {
    $this->LogOutputter = $LogOutputter;
  }

  abstract public function log(string $message);
}