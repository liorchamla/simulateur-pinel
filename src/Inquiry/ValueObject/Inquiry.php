<?php

namespace App\Inquiry\ValueObject;

use App\Entity\City;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class Inquiry
{
    /** 
     * @Assert\NotBlank()
     * @var City */
    public $city;

    /** 
     * @Assert\Type(type="numeric")
     * @Assert\NotBlank()
     * @Assert\LessThanOrEqual(value=300000, message="Le logement n'est éligible que jusqu'à 300 000 €")
     * @var float 
     */
    public $value;

    /** 
     * @Assert\NotBlank()
     * @var float 
     */
    public $surface;

    /** 
     * @Assert\NotBlank()
     * @var float 
     */
    public $taxesAvg;

    /**
     * @Assert\Callback
     */
    public function validate(ExecutionContextInterface $context, $payload)
    {
        if ($this->city->getMaxPrice() === 0) {
            $context->buildViolation("Cette commune est exclue du dispositif 😢")
                ->atPath('city')
                ->addViolation();
        }
    }
}
