<?php

namespace App\Inquiry;

use App\Inquiry\ValueObject\EncouragementLevel;
use App\Inquiry\ValueObject\Inquiry;
use App\Inquiry\ValueObject\InquiryResult;
use App\Inquiry\ValueObject\Reduction;

class InquirySimulator
{
    public function simulate(Inquiry $inquiry)
    {
        $city = $inquiry->city;

        $coefficient = (float) bcdiv(0.7 + (19 / $inquiry->surface), 1, 3);

        $twelve9First = $inquiry->value * ($city->getTwelveYears() - 3) / 100;
        $twelve3Last = $inquiry->value * (3 / 100);

        return (new InquiryResult())
            ->setMaxPrice($coefficient * $inquiry->surface * ($city->getMaxPrice() / 100))
            ->setSixYears(Reduction::mapFromInquiry($inquiry, 6))
            ->setNineYears(Reduction::mapFromInquiry($inquiry, 9))
            ->setTwelveYearsFirstNine(new Reduction($twelve9First, 9, $inquiry->taxesAvg))
            ->setTwelveYearsLastThree(new Reduction($twelve3Last, 3, $inquiry->taxesAvg))
            ->setCity($city)
            ->setInquiry($inquiry)
            ->setEncouragementLevel(EncouragementLevel::ENCOURAGEMENT_LOW);
    }
}
