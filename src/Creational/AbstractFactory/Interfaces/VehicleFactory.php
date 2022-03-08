<?php

namespace DesignPatterns\Creational\AbstractFactory\Interfaces;

use DesignPatterns\Creational\AbstractFactory\Interfaces\CarInterface;
use DesignPatterns\Creational\AbstractFactory\Interfaces\ScooterInterface;

/**
 * Abstract Factory interface. 
 * Olyan metódusokat deklarál, melyeket minden Factory-nak implementálnia kell
 * a maga módján. Általában ez azokat a létrehozó metódusokat jelenti, melyek
 * a logikailag összetartozó, mégis különböző implementációval rendelkező objektumokat hozzák létre. 
 * 
 * Példa: FleetVehicleFactory, mely flotta-alapú járműveket hoz létre. Az általa létrejövő
 * különböző járművek bár más-más implementációval bírnak, mégis összeköti őket egyfajta logika, melytől
 * egy objektumcsaládot alkotnak. (Ezesetben az a közös pont, hogy flottában lévő járművekről van szó.)
 */
interface VehicleFactory
{
  public function createCar(string $vehicleId): CarInterface;
  public function createScooter(string $vehicleId): ScooterInterface;
}