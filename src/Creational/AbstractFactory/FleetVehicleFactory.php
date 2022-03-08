<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Interfaces\VehicleFactory;
use DesignPatterns\Creational\AbstractFactory\FleetCar;
use DesignPatterns\Creational\AbstractFactory\FleetScooter;
use DesignPatterns\Creational\AbstractFactory\Interfaces\CarInterface;
use DesignPatterns\Creational\AbstractFactory\Interfaces\ScooterInterface;

/**
 * Konkrét Factory
 * A Konkrét Product-ot gyártó Factory, mely bár betartja az Abstract Factory Interface (VehicleFactory)
 * által megadott Interface typehintet, abból kizárólag csak egyfajta implementációt tud gyártani (FleetCar && FleetScooter)
 */
class FleetVehicleFactory implements VehicleFactory
{
  public function createCar(string $vehicleId): CarInterface
  {
    return new FleetCar($vehicleId);
  }

  public function createScooter(string $vehicleId): ScooterInterface
  {
    return new FleetScooter($vehicleId);
  }
}