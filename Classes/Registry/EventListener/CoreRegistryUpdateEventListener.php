<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Request\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Request\DistributorRequestInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorRequestInitialization('dmf_distributor_request'));
    }
}
