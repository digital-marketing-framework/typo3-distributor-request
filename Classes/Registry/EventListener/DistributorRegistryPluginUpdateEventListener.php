<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Request\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Request\DistributorPluginInitialization;
use DigitalMarketingFramework\Distributor\Request\DistributorRouteInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\Event\DistributorRegistryPluginUpdateEvent;

class DistributorRegistryPluginUpdateEventListener
{
    public function __invoke(DistributorRegistryPluginUpdateEvent $event): void
    {
        $registry = $event->getRegistry();
        $config = $registry->getGlobalConfiguration()->get('digitalmarketingframework_distributor_request');

        DistributorPluginInitialization::initialize($registry);

        if ($config['enableRequestRoute'] ?? false) {
            DistributorRouteInitialization::initialize($registry);
        }
    }
}
