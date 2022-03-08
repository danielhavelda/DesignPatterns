<?php
namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Scooter;

/**
 * Konkrét Product Class
 * Ezek azok a class-ok, melyeket a különböző Factory-k hoznak létre.
 */
class FleetScooter extends Scooter
{  
  protected float $pricePerMonth;

  public function __construct(string $vehicleId)
  {
    parent::__construct($vehicleId);
    $this->pricePerMonth = 7000;
  }
  
  public function getPrice(): float
  {
    return $this->pricePerMonth;
  }
}