<?php

namespace Productlib\Models;

/**
 * class Category
 *
 */
/******************************* Abstract Class ****************************
  Category does not have any pure virtual methods, but its author
  defined it as an abstract class, so you should not use it directly.
  Inherit from it instead and create only objects from the derived classes
*****************************************************************************/

abstract class Category
{

    /** Aggregations: */

    /** Compositions: */

     /*** Attributes: ***/

    /**
     *
     * @access private
     */
    private $name;

    /**
     *
     * @access private
     */
    private $selected;
}
