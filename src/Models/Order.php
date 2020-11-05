<?php

namespace Productlib\Models;

/**
 * class Order
 *
 */
/******************************* Abstract Class ****************************
  Order does not have any pure virtual methods, but its author
  defined it as an abstract class, so you should not use it directly.
  Inherit from it instead and create only objects from the derived classes
*****************************************************************************/

abstract class Order
{

    /** Aggregations: */

    /** Compositions: */

     /*** Attributes: ***/

    /**
     * @var Product
     * @access private
     */
    private $product;

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
