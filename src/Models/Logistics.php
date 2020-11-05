<?php

namespace Productlib\Models;

/**
 * class Logistics
 *
 */
/******************************* Abstract Class ****************************
  Logistics does not have any pure virtual methods, but its author
  defined it as an abstract class, so you should not use it directly.
  Inherit from it instead and create only objects from the derived classes
*****************************************************************************/

abstract class Logistics
{

    /** Aggregations: */

    /** Compositions: */

     /*** Attributes: ***/

    /**
     *
     * @access private
     */
    private $product;
    /**
     *
     * @access private
     */
    private $weight;
    /**
     *
     * @access private
     */
    private $volume;
}
