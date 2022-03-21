<?php

namespace DesignPatterns\Structural\Adapter;

use DateTime;
use Exception;

/**
 * Third Party Service Class
 * Egy másik, külső helyről kapott service, feladata ugyanaz, mint a meglévőé (FleetInfoService),
 * azonban máshogy hívják a metódusait, az egyetlen paramétere más típusú (string helyett DateTime),
 * illetve másképp adja vissza a listát is. (array helyett string)
 * A cél, hogy ez a Service bármikor felcserélhető lehessen a meglévővel, és vissza, erre pedig a megoldás egy
 * Adapter class létrehozása.
 */
class ThirdPartyFleetInfoService
{
  private string|bool $fleetCars;

  public function __construct()
  {
    $this->fleetCars = file_get_contents("./src/Structural/Adapter/mockdata.json");
  }

  public function getAllFleetCars(): string
  {
    $cars = json_decode($this->fleetCars, true);
    return is_array($cars) 
      ? $this->fleetCars 
      : throw new Exception("ThirdPartyFleetInfoService: Nem sikerült letölteni a kért autók listáját.");
  }

  public function getAllCarsByDate(DateTime $date): string
  {
    $dateString = $date->format("Y-m-d");
    $cars = json_decode($this->fleetCars, true);
    if (!array_key_exists($dateString, $cars)) {
      throw new Exception("ThirdPartyFleetInfoService: A megadott dátumhoz nem tartozik vezetett autó a rendszerünkben.");
    } 

    return json_encode($cars[$dateString]);
  }
}