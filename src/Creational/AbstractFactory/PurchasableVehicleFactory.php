<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Interfaces\VehicleFactory;
use DesignPatterns\Creational\AbstractFactory\PurchasableCar;
use DesignPatterns\Creational\AbstractFactory\PurchasableScooter;
use DesignPatterns\Creational\AbstractFactory\Interfaces\CarInterface;
use DesignPatterns\Creational\AbstractFactory\Interfaces\ScooterInterface;

/**
 * Konkrét Factory
 * A Konkrét Product-ot gyártó Factory, mely bár betartja az Abstract Factory Interface (VehicleFactory)
 * által megadott Interface typehintet, abból kizárólag csak egyfajta implementációt tud gyártani (PurchasableCar && PurchasableScooter)
 */
class PurchasableVehicleFactory implements VehicleFactory
{
  public function createCar(string $vehicleId): CarInterface
  {
    return new PurchasableCar($vehicleId);
  }

  public function createScooter(string $vehicleId): ScooterInterface
  {
    return new PurchasableScooter($vehicleId);
  }
}