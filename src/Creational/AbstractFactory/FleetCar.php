<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Car;

/**
 * Konkrét Product Class
 * Ezek azok a class-ok, melyeket a különböző Factory-k hoznak létre.
 */
class FleetCar extends Car
{
  protected float $pricePerMonth;

  public function __construct(string $vehicleId)
  {
    parent::__construct($vehicleId);
    $this->pricePerMonth = 10000;
  }

  public function getPrice(): float
  {
    return $this->pricePerMonth;
  }
}