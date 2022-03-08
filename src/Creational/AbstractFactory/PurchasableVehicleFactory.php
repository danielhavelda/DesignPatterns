<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Interfaces\VehicleFactory;
use DesignPatterns\Creational\AbstractFactory\PurchasableCar;
use DesignPatterns\Creational\AbstractFactory\PurchasableScooter;

/**
 * Konkrét Factory
 * A Konkrét Product-ot gyártó Factory, mely bár betartja az Abstract Factory Interface (VehicleFactory)
 * által megadott Interface typehintet, abból kizárólag csak egyfajta implementációt tud gyártani (PurchasableCar && PurchasableScooter)
 */
class PurchasableVehicleFactory implements VehicleFactory
{
  public function createCar(string $vehicleId): PurchasableCar
  {
    return new PurchasableCar($vehicleId);
  }

  public function createScooter(string $vehicleId): PurchasableScooter
  {
    return new PurchasableScooter($vehicleId);
  }
}