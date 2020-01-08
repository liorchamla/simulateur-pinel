<?php

namespace App\Inquiry\ValueObject;

class Reduction
{
    /** @var float */
    protected $realEconomyPerYear;

    /** @var float */
    protected $amount;

    /** @var float */
    protected $amountPerYear;

    /** @var float */
    protected $finalTaxes;

    /** @var float */
    protected $taxesAvg;

    /** @var int */
    protected $years;

    /** @var int */
    protected $encouragementLevel;

    /** @var float */
    protected $rate;

    /** @var float */
    protected $realRate;

    public static function mapFromInquiry(Inquiry $inquiry, int $years)
    {
        return new self($inquiry->value * ($inquiry->city->getYears($years) / 100), $years, $inquiry->taxesAvg);
    }

    public function __construct(float $amount, int $years, float $taxesAvg)
    {
        $this->setAmount($amount)
            ->setYears($years)
            ->setAmountPerYear($amount / $years)
            ->setTaxesAvg($taxesAvg)
            ->calculateRateAndEncouragementLevel()
            ->calculateRealEconomyPerYear();
    }

    protected function calculateRealEconomyPerYear()
    {
        if ($this->taxesAvg > $this->amountPerYear) {
            $this->realEconomyPerYear = $this->amountPerYear;
        } else {
            $this->realEconomyPerYear = $this->taxesAvg;
        }
    }

    protected function calculateRateAndEncouragementLevel()
    {
        $this->realRate = ($this->taxesAvg / $this->amountPerYear * 100);

        if ($this->realRate > 100) {
            $this->rate = 100;
        } else {
            $this->rate = $this->realRate;
        }

        if ($this->rate >= 75) {
            $this->encouragementLevel = EncouragementLevel::ENCOURAGEMENT_HIGH;
        }

        if ($this->rate >= 50) {
            $this->encouragementLevel = EncouragementLevel::ENCOURAGEMENT_NORMAL;
        }

        if ($this->rate < 50) {
            $this->encouragementLevel = EncouragementLevel::ENCOURAGEMENT_LOW;
        }

        return $this;
    }

    /**
     * Get the value of amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of finalTaxes
     */
    public function getFinalTaxes()
    {
        return $this->finalTaxes;
    }

    /**
     * Set the value of finalTaxes
     *
     * @return  self
     */
    public function setFinalTaxes($finalTaxes)
    {
        $this->finalTaxes = $finalTaxes;

        if ($this->finalTaxes < 0) {
            $this->finalTaxes = 0;
        }

        return $this;
    }

    /**
     * Get the value of amountPerYear
     */
    public function getAmountPerYear()
    {
        return $this->amountPerYear;
    }

    /**
     * Set the value of amountPerYear
     *
     * @return  self
     */
    public function setAmountPerYear($amountPerYear)
    {
        $this->amountPerYear = $amountPerYear;

        return $this;
    }

    /**
     * Get the value of years
     */
    public function getYears()
    {
        return $this->years;
    }

    /**
     * Set the value of years
     *
     * @return  self
     */
    public function setYears($years)
    {
        $this->years = $years;

        return $this;
    }

    /**
     * Get the value of taxesAvg
     */
    public function getTaxesAvg()
    {
        return $this->taxesAvg;
    }

    /**
     * Set the value of taxesAvg
     *
     * @return  self
     */
    public function setTaxesAvg($taxesAvg)
    {
        $this->taxesAvg = $taxesAvg;

        $this->setFinalTaxes($taxesAvg - $this->amountPerYear);

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

    /**
     * Get the value of rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @return  self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get the value of realEconomyPerYear
     */
    public function getRealEconomyPerYear()
    {
        return $this->realEconomyPerYear;
    }

    /**
     * Set the value of realEconomyPerYear
     *
     * @return  self
     */
    public function setRealEconomyPerYear($realEconomyPerYear)
    {
        $this->realEconomyPerYear = $realEconomyPerYear;

        return $this;
    }

    /**
     * Get the value of realRate
     */
    public function getRealRate()
    {
        return $this->realRate;
    }

    /**
     * Set the value of realRate
     *
     * @return  self
     */
    public function setRealRate($realRate)
    {
        $this->realRate = $realRate;

        return $this;
    }
}
