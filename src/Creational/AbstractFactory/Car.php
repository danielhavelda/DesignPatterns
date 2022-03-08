<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Interfaces\CarInterface;

/**
 * Superclass, mely a közös metódusokat és tulajdonságokat tárolja.
 */
class Car implements CarInterface
{
  protected string $vehicleId;

  protected string $modelName;
  
  protected int $maxRange;
  
  protected int $currentRange;
  
  protected float $latitude;

  protected float $longitude;

  protected int $seats;

  public function __construct(string $vehicleId)
  {
    /**
     * Elképzelt DB lekérdezés, mely jármű ID alapján visszaadja a hozzátartozó adatokat,
     * ha az id szerint van találat.
     */
    $this->vehicleId = $vehicleId;
    $this->modelName = "MINI Cooper SE";
    $this->maxRange = 350;
    $this->currentRange = 350;
    $this->latitude = 47.496575;
    $this->longitude = 19.110183;
    $this->seats = 4;
  }

  public function getId(): string
  {
    return $this->vehicleId;
  }

  public function getSeats(): int
  {
    return $this->seats;
  }

  public function getModelName(): string
  {
    return $this->modelName;
  }

  public function getMaxRange(): int
  {
    return $this->maxRange;
  }

  public function getCurrentRange(): int
  {
    return $this->currentRange;
  }

  public function getLongitude(): float
  {
    return $this->longitude;
  }

  public function getLangitude(): float
  {
    return $this->latitude;
  }
}