<?php

namespace DesignPatterns\Creational\Singleton;

use Exception;

/**
 * Singleton Class
 * Az ez alapján kreált objektumból kizárólag egy létezhet, és a példányhoz globálisan hozzá lehet férni bárki számára,
 * scope-tól függetlenül.
 */
class Config
{
  private static Config|null $Config = null;
  private array|null $configMap = null;

  /**
   * A konstruktor helyébe lépő metódus, mely vagy létrehoz egy instance-t,
   * vagy ha már azelőtt létrehozott, visszaadja azt.
   */
  public static function getInstance(): Config
  {
    if (static::$Config === null) {
      static::$Config = new static();
    }

    return static::$Config;
  }

  /**
   * A konstruktorhoz nem férhet hozzá kívülről senki, lévén a Singleton Object-ek
   * nem a new() keyword-el hozhatóak létre, hanem kizárólag egy statikus metóduson keresztül,
   * mely ellenőrzi, hogy az instance initalizálva lett e már azelőtt.
   */
  private function __construct()
  {
    $this->configMap = [];
  }

  public function get(string $key): string|int|array
  {
    return $this->configMap[$key];
  }

  public function set(string $key, string|int|array $value): void
  {
    $this->configMap[$key] = $value;
  }

  /** 
   * A PHP beépített objektum klónozási metódusának felülírása, lévén,
   * a singletonból kizárólag egy instance létezhet.
  */
  private function __clone()
  {}

  /** 
   * Az unserialize szintén tiltott a Singleton Object számára, mert a PHP automatikusan meghívja
   * ilyenkor a wakeup metódusát az objektumnak, mely egy újabb Objectet adna vissza.
  */
  public function __wakeup()
  {
    throw new Exception("Cannot unserialize a Singleton Object.");
  }
}