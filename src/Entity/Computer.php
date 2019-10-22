<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ComputerRepository")
 */
class Computer
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
    private $brand;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isLabtop;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $passmarkScore;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getIsLabtop(): ?bool
    {
        return $this->isLabtop;
    }

    public function setIsLabtop(bool $isLabtop): self
    {
        $this->isLabtop = $isLabtop;

        return $this;
    }

    public function getPassmarkScore(): ?int
    {
        return $this->passmarkScore;
    }

    public function setPassmarkScore(?int $passmarkScore): self
    {
        $this->passmarkScore = $passmarkScore;

        return $this;
    }
}
