<?php

namespace App\Inquiry\ValueObject;

use App\Entity\City;

class InquiryResult
{
    /** @var float */
    protected $maxPrice;

    /** @var Reduction */
    protected $sixYears;

    /** @var Reduction */
    protected $nineYears;

    /** @var Reduction */
    protected $twelveYearsFirstNine;

    /** @var Reduction */
    protected $twelveYearsLastThree;

    /** @var City */
    protected $city;

    /** @var Inquiry */
    protected $inquiry;

    /** @var int */
    protected $encouragementLevel;

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

    /**
     * Get the value of inquiry
     */
    public function getInquiry()
    {
        return $this->inquiry;
    }

    /**
     * Set the value of inquiry
     *
     * @return  self
     */
    public function setInquiry($inquiry)
    {
        $this->inquiry = $inquiry;

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
     * Get the value of twelveYearsFirstNine
     */
    public function getTwelveYearsFirstNine()
    {
        return $this->twelveYearsFirstNine;
    }

    /**
     * Set the value of twelveYearsFirstNine
     *
     * @return  self
     */
    public function setTwelveYearsFirstNine($twelveYearsFirstNine)
    {
        $this->twelveYearsFirstNine = $twelveYearsFirstNine;

        return $this;
    }

    /**
     * Get the value of twelveYearsLastThree
     */
    public function getTwelveYearsLastThree()
    {
        return $this->twelveYearsLastThree;
    }

    /**
     * Set the value of twelveYearsLastThree
     *
     * @return  self
     */
    public function setTwelveYearsLastThree($twelveYearsLastThree)
    {
        $this->twelveYearsLastThree = $twelveYearsLastThree;

        return $this;
    }

    /**
     * Get the value of encouragementLevel
     */
    public function getEncouragementLevel()
    {
        return $this->encouragementLevel;
    }

    /**
     * Set the value of encouragementLevel
     *
     * @return  self
     */
    public function setEncouragementLevel($encouragementLevel)
    {
        $this->encouragementLevel = $encouragementLevel;

        return $this;
    }
}
