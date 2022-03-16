<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Interfaces\PurchaseOrderBuilderInterface;
use DesignPatterns\Creational\Builder\Models\PurchasableItem;
use DesignPatterns\Creational\Builder\Models\User;
/**
 * Director Class
 * A különböző előállítási-recepteket tárolja, melyek alapján különböző konfigurációjú Product Object-eket tud
 * létrehozni az adott Builderen keresztül.
 * 
 * Nem szükséges a Builder Pattern implementálásához, csak amolyan opcionális plusz.
 */
class PurchaseOrderDirector
{
  /**
   * @param PurchaseOrderBuilderInterface $PurchaseOrderBuilder
   * @return PurchaseOrderBuilderInterface
   */
  public function createMinimal(PurchaseOrderBuilderInterface $PurchaseOrderBuilder): PurchaseOrderBuilderInterface
  {
    $PurchaseOrderBuilder->setId();
    $PurchaseOrderBuilder->setType();
    $PurchaseOrderBuilder->setCreatedOn();
    return $PurchaseOrderBuilder;
  }

  /**
   * @param PurchaseOrderBuilderInterface $PurchaseOrderBuilder
   * @param array{user: User, items: PurchasableItem[] } $options
   * @return PurchaseOrderBuilderInterface
   */
  public function create(PurchaseOrderBuilderInterface $PurchaseOrderBuilder, array $options): PurchaseOrderBuilderInterface
  {
    $PurchaseOrderBuilder->setId();
    $PurchaseOrderBuilder->setType();
    $PurchaseOrderBuilder->setCreatedOn();
    $PurchaseOrderBuilder->setUser($options["user"]);
    $PurchaseOrderBuilder->setItems($options["items"]);

    return $PurchaseOrderBuilder;
  }
}