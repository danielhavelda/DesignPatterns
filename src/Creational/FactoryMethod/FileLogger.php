<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Interfaces\Logger;

/**
 * Product class, mely a Product-ot leíró interface-t implementálja.
 */
class FileLogger implements Logger
{
  protected string $filePath;

  public function __construct(string $filePath)
  {
    $this->filePath = $filePath;
  }

  public function getFilePath(): string
  {
    return $this->filePath;
  }

  public function log(string $msg): void
  {
    $file = fopen($this->filePath, "a");
    $msgWithDate = "{$this->getCurrentDate()} | {$msg}";
    fwrite($file, $msgWithDate . PHP_EOL);
    fclose($file);
  }

  public function getCurrentDate()
  {
    return date("Y-m-d H:i:s");
  }
}