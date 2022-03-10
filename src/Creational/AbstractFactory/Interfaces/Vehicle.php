<?php

namespace DesignPatterns\Creational\AbstractFactory\Interfaces;

/**
 * Alapvető interface, mely a Product Interface-k közös metódusait tartalmazza
 */
interface Vehicle
{
  public function __construct(string $vehicleId);
  public function getMaxRange(): int;
  public function getCurrentRange(): int;
  public function getLatitude(): float;
  public function getLongitude(): float;
}