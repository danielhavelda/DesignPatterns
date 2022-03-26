<?php

namespace DesignPatterns\Structural\Bridge;

use DesignPatterns\Structural\Bridge\Interfaces\LogOutputterInterface;

/**
 * Concrete Implementation Class
 * Konkrét implementációt tartalmaz, mely megfelel az Implementation Layer Interface-nek.
 * Ebben a példában az output kifejezetten file-okba való írást jelent.
 */
class FileLogOutputter implements LogOutputterInterface
{
  private string $logPath;

  public function __construct(string $logPath)
  {
    $this->logPath = $logPath;
  }

  public function output(string $message): void
  {
    $file = fopen($this->logPath, "a");
    fwrite($file, $message.PHP_EOL);
    fclose($file);
  }
}