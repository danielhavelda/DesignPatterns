<?php
namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Interfaces\ScooterInterface;

/**
 * Superclass, mely a közös metódusokat és tulajdonságokat tárolja.
 */
class Scooter implements ScooterInterface
{  
  protected string $vehicleId;

  protected string $modelName;

  protected int $maxRange;

  protected int $currentRange;

  protected float $latitude;

  protected float $longitude;

  public function __construct(string $vehicleId)
  {
    /**
     * Elképzelt DB lekérdezés, mely jármű ID alapján visszaadja a hozzátartozó adatokat,
     * ha az id szerint van találat.
     */
    $this->vehicleId = $vehicleId;
    $this->modelName = "Xiaomi Mi Pro 2";
    $this->maxRange = 45;
    $this->currentRange = 45;
    $this->latitude = 47.496575;
    $this->longitude = 19.110183;
  }

  public function getId(): string
  {
    return $this->vehicleId;
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

  public function getLangitude(): float
  {
    return $this->latitude;
  }

  public function getLongitude(): float
  {
    return $this->longitude;
  }
}