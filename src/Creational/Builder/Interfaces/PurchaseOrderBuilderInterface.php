<?php

namespace DesignPatterns\Creational\Builder\Interfaces;

use DesignPatterns\Creational\Builder\Interfaces\PurchaseOrderInterface;
use DesignPatterns\Creational\Builder\Models\PurchasableItem;
use DesignPatterns\Creational\Builder\Models\User;

interface PurchaseOrderBuilderInterface
{
  public function setId(): self;
  public function setType(): self;
  public function setCreatedOn(): self;
  public function setUser(User $User): self;
  /** @param PurchasableItem[] $items */
  public function setItems(array $Items): self;
  public function reset(): void;
  public function getOrder(): PurchaseOrderInterface;
}