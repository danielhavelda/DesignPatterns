<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Car;

/**
 * Konkrét Product Class
 * Ezek azok a class-ok, melyeket a különböző Factory-k hoznak létre.
 */
class PurchasableCar extends Car
{
  protected float $price;

  public function __construct(string $vehicleId)
  {
    parent::__construct($vehicleId);
    $this->price = 130000;
  }

  public function getPrice(): float
  {
    return $this->price;
  }
}