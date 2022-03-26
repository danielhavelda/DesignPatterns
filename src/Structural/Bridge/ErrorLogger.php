<?php

namespace DesignPatterns\Structural\Bridge;

use DateTime;
use DesignPatterns\Structural\Bridge\Interfaces\LogOutputterInterface;

/**
 * Refined Abstraction Class
 * Az Abstraction Layer Class egy implementációja, mely eleget tesz
 * az Abstract class-nak, ugyanakkor annak egy bizonyos feladatra
 * specializált változata. (Ez ebben az esetben hibaüzenetek kiírását jelenti.)
 */
class ErrorLogger extends Logger
{
  public function __construct(LogOutputterInterface $LogOutputter)
  {
    parent::__construct($LogOutputter);
  }

  public function log(string $message): void
  {
    $dateTime = (new DateTime("now"))->format("Y-m-d H:m:s");
    $this->someSideEffect();
    $this->LogOutputter->output("ErrorLogger [$dateTime]: " . $message);
  }

  /**
   * Elképzelt metódus, mely minden error loggolásál csinál valamit.
   * Mondjuk egy DB táblába insert-el valamilyen információt.
   * @return void
   */
  public function someSideEffect(): void
  {}
}