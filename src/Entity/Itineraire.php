<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository;
use App\Repository\ItineraireRepository;


#[ORM\Entity(repositoryClass: ItineraireRepository::class)]

class Itineraire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $iditineraire= null;

    #[ORM\Column(length: 255)]
    private ?string $pointdepart= null;

    #[ORM\Column(length: 255)]
    private ?string  $pointarrivee= null;

    #[ORM\Column]
    private ?float $kilometrage= null;

    #[ORM\Column]
    private ?int $dureeestimee= null;
    #[ORM\Column]
    private ?int $nbUsage= null;


    public function getIditineraire(): ?int
    {
        return $this->iditineraire;
    }

    public function getPointdepart(): ?string
    {
        return $this->pointdepart;
    }

    public function setPointdepart(string $pointdepart): self
    {
        $this->pointdepart = $pointdepart;

        return $this;
    }

    public function getPointarrivee(): ?string
    {
        return $this->pointarrivee;
    }

    public function setPointarrivee(string $pointarrivee): self
    {
        $this->pointarrivee = $pointarrivee;

        return $this;
    }

    public function getKilometrage(): ?float
    {
        return $this->kilometrage;
    }

    public function setKilometrage(float $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getDureeestimee(): ?int
    {
        return $this->dureeestimee;
    }

    public function setDureeestimee(int $dureeestimee): self
    {
        $this->dureeestimee = $dureeestimee;

        return $this;
    }
    public function getNbUsage(): ?int
    {
        return $this->nbUsage;
    }
      public function setNbUsage(int $nbUsage): self
    {
        $this->nbUsage = $nbUsage;

        return $this;
    }

}
