<?php

namespace DesignPatterns\Creational\Builder;

use DateTime;
use DesignPatterns\Creational\Builder\Interfaces\PurchaseOrderInterface;
use DesignPatterns\Creational\Builder\Models\PurchasableItem;
use DesignPatterns\Creational\Builder\Models\User;

/**
 * Product Class
 * Azt az objektumot írja le, melyet a különböző Builderek különböző implementációjukkal előállítanak.
 * Lehet Immutable és Mutable Object is, specifikációtól függően.
 */
class PurchaseOrder implements PurchaseOrderInterface
{
  public ?string $id = null;
  public ?int $type = null;
  public ?DateTime $createdOn = null;
  public ?User $User = null;
  /** @var PurchasableItem[]|null $items  */
  public ?array $items = null;
  
  public function getId(): ?string
  {
    return $this->id;
  }

  public function getType(): ?int
  {
    return $this->type;
  }

  public function getCreatedOn(): ?DateTime
  {
    return $this->createdOn;
  }
  
  public function getUser(): ?User
  {
    return $this->User;
  }

  /** @return PurchasableItem[]|null */
  public function getItems(): array
  {
    return $this->items;
  }
}