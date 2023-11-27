<?php

namespace App\Model;

interface MesureInterface
{
    public function getId(): ?int;
    public function getValue(): ?int;
    public function setValue(int $value): static;
    public function getType(): ?int;
    public function setType(int $type): static;
    public function getUnit(): ?int;
    public function setUnit(int $unit): static;
    public function getAlgo(): ?int;
    public function setAlgo(int $algo): static;
    public function getFm(): ?int;
    public function setFm(int $fm): static;
    public function getFw(): ?int;
    public function setFw(int $fw): static;
}
?>