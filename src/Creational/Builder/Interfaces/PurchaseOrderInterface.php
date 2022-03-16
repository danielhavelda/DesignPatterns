<?php

namespace DesignPatterns\Creational\Builder\Interfaces;

use DesignPatterns\Creational\Builder\Models\User;
use DesignPatterns\Creational\Builder\Models\PurchasableItem;
use DateTime;

interface PurchaseOrderInterface
{
  public function getId(): ?string;
  public function getType(): ?int;
  public function getCreatedOn(): ?DateTime;
  public function getUser(): ?User;
  /** @return PurchasableItem[]|null */
  public function getItems(): ?array;
}