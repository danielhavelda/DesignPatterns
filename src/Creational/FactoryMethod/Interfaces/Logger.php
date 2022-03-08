<?php

namespace DesignPatterns\Creational\FactoryMethod\Interfaces;

/**
 * Az az interface, melyet Product interface-nek hívunk. 
 * Feladata, hogy általános leírást biztosítson azokhoz az object-ekhez,
 * melyeket a különböző subclass implementációkkal akarunk generálni.
 */
interface Logger
{
  public function log(string $msg): void;
}