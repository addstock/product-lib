<?php

namespace productlib;

use DomainException;

/**
 * Service factory for returning a productlib\TableGatewayMapper instance.
 *
 * Requires the productlib\TableGateway service be present in the service locator.
 */
class TableGatewayMapperFactory
{
    public function __invoke($services)
    {
        if (! $services->has('productlib\TableGateway')) {
            throw new DomainException(sprintf(
                'Cannot create %s; missing %s dependency',
                TableGatewayMapper::class,
                TableGateway::class
            ));
        }
        return new TableGatewayMapper($services->get(TableGateway::class));
    }
}
