<?php

namespace DesignPatterns\Creational\Builder\Builders;

use DateTime;
use DesignPatterns\Creational\Builder\Interfaces\PurchaseOrderBuilderInterface;
use DesignPatterns\Creational\Builder\Models\PurchasableItem;
use DesignPatterns\Creational\Builder\PurchaseOrder;
use DesignPatterns\Creational\Builder\Models\User;
use DesignPatterns\Creational\Builder\Enums\OrderType;

/**
 * Builder Class
 * Feladata, hogy az adott Product-ot valamilyen egyedi logika mentén előállítása.
 */
class BakeryPurchaseOrderBuilder implements PurchaseOrderBuilderInterface
{
  private PurchaseOrder $PurchaseOrder;

  public function __construct()
  {
    $this->PurchaseOrder = new PurchaseOrder();
  }

  public function setId(): self
  {
    $generatedValue = substr(md5(microtime()), rand(0, 26), 15);
    $this->PurchaseOrder->id = "bakery_{$generatedValue}";
    return $this;
  }

  public function setType(): self
  {
    $this->PurchaseOrder->type = OrderType::Bakery->value;
    return $this;
  }

  public function setCreatedOn(): self
  {
    $this->PurchaseOrder->createdOn = (new DateTime("now"));
    return $this;
  }

  public function setUser(User $User): self
  {
    $this->PurchaseOrder->User = $User;
    return $this;
  }

  /** @param PurchasableItem[] $items */
  public function setItems(array $items): self
  {
    $this->PurchaseOrder->items = $items;
    return $this;
  }

  public function reset(): void
  {
    $this->PurchaseOrder = new PurchaseOrder();
  }

  public function getOrder(): PurchaseOrder
  {
    $tmp = $this->PurchaseOrder;
    $this->reset();
    return $tmp;
  }
}