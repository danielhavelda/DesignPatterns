<?php

namespace DesignPatterns\Creational\AbstractFactory\Interfaces;

use DesignPatterns\Creational\AbstractFactory\Interfaces\Vehicle;

/**
 * Product Interface
 * Az az alapvető interface, melyet a különböző Product-ok implementálnak más és más kiegészítéssel.
 */
interface ScooterInterface extends Vehicle
{
}