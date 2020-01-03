<?php

namespace App\Inquiry;

use App\Inquiry\ValueObject\Inquiry;
use App\Inquiry\ValueObject\InquiryResult;

class InquirySimulator
{
    public function simulate(Inquiry $inquiry)
    {
        $city = $inquiry->city;

        $coefficient = (float) bcdiv(0.7 + (19 / $inquiry->surface), 1, 3);

        return (new InquiryResult())
            ->setMaxPrice($coefficient * $inquiry->surface * ($city->getMaxPrice() / 100))
            ->setSixYears($inquiry->value * $city->getSixYears() / 100)
            ->setNineYears($inquiry->value * $city->getNineYears() / 100)
            ->setTwelveYears($inquiry->value * $city->getTwelveYears() / 100)
            ->setCity($city);
    }
}
