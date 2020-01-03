<?php

namespace App\Inquiry\ValueObject;

use App\Entity\City;

class InquiryResult
{
    /** @var float */
    protected $maxPrice;

    /** @var float */
    protected $sixYears;

    /** @var float */
    protected $nineYears;

    /** @var float */
    protected $twelveYears;

    /** @var City */
    protected $city;

    /**
     * Get the value of maxPrice
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Set the value of maxPrice
     *
     * @return  self
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Get the value of sixYears
     */
    public function getSixYears()
    {
        return $this->sixYears;
    }

    /**
     * Set the value of sixYears
     *
     * @return  self
     */
    public function setSixYears($sixYears)
    {
        $this->sixYears = $sixYears;

        return $this;
    }

    /**
     * Get the value of nineYears
     */
    public function getNineYears()
    {
        return $this->nineYears;
    }

    /**
     * Set the value of nineYears
     *
     * @return  self
     */
    public function setNineYears($nineYears)
    {
        $this->nineYears = $nineYears;

        return $this;
    }

    /**
     * Get the value of twelveYears
     */
    public function getTwelveYears()
    {
        return $this->twelveYears;
    }

    /**
     * Set the value of twelveYears
     *
     * @return  self
     */
    public function setTwelveYears($twelveYears)
    {
        $this->twelveYears = $twelveYears;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }
}
