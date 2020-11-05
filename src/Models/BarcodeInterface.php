<?php

namespace Productlib\Models;

/**
 * class BarcodeInterface
 *
 */
/******************************* Abstract Class ****************************
  BarcodeInterface does not have any pure virtual methods, but its author
  defined it as an abstract class, so you should not use it directly.
  Inherit from it instead and create only objects from the derived classes
*****************************************************************************/

interface BarcodeInterface
{

    /** Aggregations: */

    /** Compositions: */
    private $m_;

    /**
     *
     *
     * @return string
     * @abstract
     * @access public
     */
    public function print();

    /**
     *
     *
     * @param Type type
     * @return
     * @abstract
     * @access public
     */
    public function setType($type);
}
