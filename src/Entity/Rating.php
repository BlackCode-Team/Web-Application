<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\RatingRepository;

#[ORM\Entity(repositoryClass: RatingRepository::class)]

class Rating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idrating=null;

    #[ORM\ManyToOne(targetEntity: Vehicule::class, inversedBy: 'Rating')]
    #[ORM\JoinColumn(name: 'idvehicule', referencedColumnName: 'idvehicule')]
    private ?Vehicule $vehicule=null;

    #[ORM\Column]
    private ?int $nbetoile=null;

    public function getIdrating(): ?int
    {
        return $this->idrating;
    }

    public function getIdvehicule(): ?int
    {
        return $this->idvehicule;
    }

    public function setIdvehicule(int $idvehicule): self
    {
        $this->idvehicule = $idvehicule;

        return $this;
    }

    public function getNbetoile(): ?int
    {
        return $this->nbetoile;
    }

    public function setNbetoile(int $nbetoile): self
    {
        $this->nbetoile = $nbetoile;

        return $this;
    }

    public function getVehicule(): ?Vehicule
    {
        return $this->vehicule;
    }

    public function setVehicule(?Vehicule $vehicule): self
    {
        $this->vehicule = $vehicule;

        return $this;
    }


}
