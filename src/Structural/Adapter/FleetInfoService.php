<?php

namespace DesignPatterns\Structural\Adapter;

use DesignPatterns\Structural\Adapter\Interfaces\FleetInfoInterface;
use Exception, DateTime;

/**
 * Service Class
 * Már meglévő, belsős service. Feladata, hogy visszaadjon egy listát a flotta autóinkról,
 * illetve dátum szerint az akkor épp használtakról. (mockdata.json)
 */
class FleetInfoService implements FleetInfoInterface
{
  private array|null $cars;

  public function __construct()
  {
    $this->cars = json_decode(file_get_contents("./src/Structural/Adapter/mockdata.json"), true);
  }

  public function getAll(): array
  {
    return is_array($this->cars) 
      ? $this->cars 
      : throw new Exception("FleetInfoService: Nem sikerült letölteni a kért autók listáját.");
  }

  public function getAllByDate(string $date): array
  {
    $date = (new DateTime($date))->format("Y-m-d");
    if (!array_key_exists($date, $this->cars)) {
      throw new Exception("FleetInfoService: A megadott dátumhoz nem tartozik vezetett autó a rendszerünkben.");
    }

    return $this->cars[$date];
  }
}