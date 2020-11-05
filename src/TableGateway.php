<?php

namespace Productlib;

use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\ResultSet\HydratingResultSet;
use Laminas\Db\TableGateway\TableGateway as LaminasTableGateway;
use Laminas\Hydrator\ObjectProperty;
use Laminas\Hydrator\ObjectPropertyHydrator;

/**
 *
 */
class TableGateway extends LaminasTableGateway
{
    public function __construct($table, AdapterInterface $adapter, $features = null)
    {
        $hydratorClass = class_exists(ObjectPropertyHydrator::class)
            ? ObjectPropertyHydrator::class
            : ObjectPropertyHydrator::class;
        $resultSet = new HydratingResultSet(new $hydratorClass(), new Product());

        return parent::__construct($table, $adapter, $features, $resultSet);
    }
}
