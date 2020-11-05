<?php

namespace Productlib;

use DomainException;

/**
 *
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
