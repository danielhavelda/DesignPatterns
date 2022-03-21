<?php

namespace DesignPatterns\Structural\Adapter\Adapters;

use DesignPatterns\Structural\Adapter\Interfaces\FleetInfoInterface;
use DesignPatterns\Structural\Adapter\ThirdPartyFleetInfoService;
use DateTime;

/**
 * Adapter Class
 * Magába foglal egy olyan class objectet, melynek metódusai nem felelnek meg az implementált interface elvárásainak,
 * ugyanakkor kiegészíti annak metódusait úgy, hogy azok megfelelővé váljanak, ezáltal felcserélhetővé válik egy már meglévő, 
 * funkcionalitásában hasonló class objectünkkel.
 */
class ThirdPartyFleetInfoAdapter implements FleetInfoInterface
{
  private ThirdPartyFleetInfoService $ThirdPartyFleetInfoService;

  public function __construct(ThirdPartyFleetInfoService $ThirdPartyFleetInfoService)
  {
    $this->ThirdPartyFleetInfoService = $ThirdPartyFleetInfoService;
  }
  
  public function getAll(): array
  {
    return json_decode($this->ThirdPartyFleetInfoService->getAllFleetCars(), true);
  }

  public function getAllByDate(string $date): array
  {
    return json_decode($this->ThirdPartyFleetInfoService->getAllCarsByDate(new DateTime($date)), true);
  }
}