<?php

namespace DesignPatterns\Structural\Adapter\Interfaces;

/**
 * Közös Interface
 * Azért felel, hogy azon serviceinket felcserélhetővé tegye, melyek bár funkcionalitásukban hasonlóak,
 * metódusaik kissé eltérnek egymástól. (Pl. más típusú paramétereket várnak, más típust adnak vissza, más a metódusok neve).
 */
interface FleetInfoInterface
{
  /**
   * Visszaadja a flotta autók listáját.
   * @return array
   */
  public function getAll(): array;
  
  /**
   * Visszaadja a használt flotta autók listáját dátumhoz kötve.
   * @param string $date - A keresett dátum
   * @return array
   */
  public function getAllByDate(string $date): array;
}