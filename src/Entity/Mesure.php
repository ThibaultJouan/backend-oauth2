<?php

namespace App\Entity;

use App\Model\MesureInterface;
use App\Repository\MesureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MesureRepository::class)]
class Mesure implements MesureInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $value = null;

    #[ORM\Column]
    private ?int $type = null;

    #[ORM\Column]
    private ?int $unit = null;

    #[ORM\Column]
    private ?int $algo = null;

    #[ORM\Column]
    private ?int $fm = null;

    #[ORM\Column]
    private ?int $fw = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getUnit(): ?int
    {
        return $this->unit;
    }

    public function setUnit(int $unit): static
    {
        $this->unit = $unit;

        return $this;
    }

    public function getAlgo(): ?int
    {
        return $this->algo;
    }

    public function setAlgo(int $algo): static
    {
        $this->algo = $algo;

        return $this;
    }

    public function getFm(): ?int
    {
        return $this->fm;
    }

    public function setFm(int $fm): static
    {
        $this->fm = $fm;

        return $this;
    }

    public function getFw(): ?int
    {
        return $this->fw;
    }

    public function setFw(int $fw): static
    {
        $this->fw = $fw;

        return $this;
    }
}
