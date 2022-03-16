<?php

namespace DesignPatterns\Creational\Builder\Models;

class PurchasableItem
{
  private string $id;
  private string $name;
  private int $cost;

  public function __construct(string $name, int $cost)
  {
    $this->id = substr(md5(microtime()), rand(0, 26), 10);
    $this->name = $name;
    $this->cost = $cost;
  }

  public function getId(): string
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getCost(): int
  {
    return $this->cost;
  }
}