<?php

namespace Productlib\Models;

/**
 * class Product
 *
 */
class Product
{

    /** Aggregations: */

    /** Compositions: */
    private $m_;

    /*** Attributes: ***/

    /**
     * @var string
     * @access private
     */
    private $name;
    /**
     * @var bool
     * @access private
     */
    private $isSalable;
    /**
     * @var bool
     * @access private
     */
    private $isAffordable;
    /**
     * @var string
     * @access private
     */
    private $internalReference;
    /**
     * @var string
     * @access private
     */
    private $note;
    /**
     * @var Category[]
     * @access private
     */
    private $category;
    /**
     * @var Image
     * @access private
     */
    private $image;
    /**
     * @var Price
     * @access private
     */
    private $price;
    /**
     * @var Cost
     * @access private
     */
    private $cost;
    /**
     * @var BarcodeInterface
     * @access private
     */
    private $barcode;
    /**
     * @var Tyoe
     * @access private
     */
    private $type;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function isIsSalable()
    {
        return $this->isSalable;
    }

    /**
     * @param bool $isSalable
     *
     * @return self
     */
    public function setIsSalable($isSalable)
    {
        $this->isSalable = $isSalable;

        return $this;
    }

    /**
     * @return bool
     */
    public function isIsAffordable()
    {
        return $this->isAffordable;
    }

    /**
     * @param bool $isAffordable
     *
     * @return self
     */
    public function setIsAffordable($isAffordable)
    {
        $this->isAffordable = $isAffordable;

        return $this;
    }

    /**
     * @return string
     */
    public function getInternalReference()
    {
        return $this->internalReference;
    }

    /**
     * @param string $internalReference
     *
     * @return self
     */
    public function setInternalReference($internalReference)
    {
        $this->internalReference = $internalReference;

        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return Category[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category[] $category
     *
     * @return self
     */
    public function setCategory(Category[] $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Image $image
     *
     * @return self
     */
    public function setImage(Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Price $price
     *
     * @return self
     */
    public function setPrice(Price $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Cost
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param Cost $cost
     *
     * @return self
     */
    public function setCost(Cost $cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @return BarcodeInterface
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param BarcodeInterface $barcode
     *
     * @return self
     */
    public function setBarcode(BarcodeInterface $barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @return Tyoe
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Tyoe $type
     *
     * @return self
     */
    public function setType(Tyoe $type)
    {
        $this->type = $type;

        return $this;
    }
}
