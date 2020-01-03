<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityRepository")
 */
class City
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $department;

    /**
     * @ORM\Column(type="integer")
     */
    private $maxPrice;

    /**
     * @ORM\Column(type="integer")
     */
    private $alone;

    /**
     * @ORM\Column(type="integer")
     */
    private $couple;

    /**
     * @ORM\Column(type="integer")
     */
    private $withOne;

    /**
     * @ORM\Column(type="integer")
     */
    private $withTwo;

    /**
     * @ORM\Column(type="integer")
     */
    private $withThree;

    /**
     * @ORM\Column(type="integer")
     */
    private $withFour;

    /**
     * @ORM\Column(type="integer")
     */
    private $sixYears;

    /**
     * @ORM\Column(type="integer")
     */
    private $nineYears;

    /**
     * @ORM\Column(type="integer")
     */
    private $twelveYears;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(string $zone): self
    {
        $this->zone = $zone;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(string $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    public function setMaxPrice(int $maxPrice): self
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    public function getAlone(): ?int
    {
        return $this->alone;
    }

    public function setAlone(int $alone): self
    {
        $this->alone = $alone;

        return $this;
    }

    public function getCouple(): ?int
    {
        return $this->couple;
    }

    public function setCouple(int $couple): self
    {
        $this->couple = $couple;

        return $this;
    }

    public function getWithOne(): ?int
    {
        return $this->withOne;
    }

    public function setWithOne(int $withOne): self
    {
        $this->withOne = $withOne;

        return $this;
    }

    public function getWithTwo(): ?int
    {
        return $this->withTwo;
    }

    public function setWithTwo(int $withTwo): self
    {
        $this->withTwo = $withTwo;

        return $this;
    }

    public function getWithThree(): ?int
    {
        return $this->withThree;
    }

    public function setWithThree(int $withThree): self
    {
        $this->withThree = $withThree;

        return $this;
    }

    public function getWithFour(): ?int
    {
        return $this->withFour;
    }

    public function setWithFour(int $withFour): self
    {
        $this->withFour = $withFour;

        return $this;
    }

    public function getSixYears(): ?int
    {
        return $this->sixYears;
    }

    public function setSixYears(int $sixYears): self
    {
        $this->sixYears = $sixYears;

        return $this;
    }

    public function getNineYears(): ?int
    {
        return $this->nineYears;
    }

    public function setNineYears(int $nineYears): self
    {
        $this->nineYears = $nineYears;

        return $this;
    }

    public function getTwelveYears(): ?int
    {
        return $this->twelveYears;
    }

    public function setTwelveYears(int $twelveYears): self
    {
        $this->twelveYears = $twelveYears;

        return $this;
    }
}
