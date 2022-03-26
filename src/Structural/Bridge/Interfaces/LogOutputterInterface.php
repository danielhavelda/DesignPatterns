<?php

namespace DesignPatterns\Structural\Bridge\Interfaces;

/**
 * Implementation Layer Interface
 * Azt a közös interface-t deklarálja, mely közös a konkrét implementációkban.
 * Az Abstraction Layer ezen interface-n keresztül kommunikál az Implementation Layer-el.
 *
 * Az interface-ben felsorolt metódusok low level műveleteket rejtenek, melyeket
 * az Abstraction Layer komplexebb funkciókhoz használ fel.
 */
interface LogOutputterInterface
{
  public function output(string $message);
}