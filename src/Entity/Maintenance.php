<?php

namespace App\Entity;

use App\Repository\MaintenanceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MaintenanceRepository::class)]
class Maintenance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idmaintenance=null;

    #[ORM\Column(type: "datetime")]
     private ?\DateTimeInterface $date;

     #[ORM\ManyToOne(targetEntity: Vehicule::class, inversedBy: 'Reclamation')]
    #[ORM\JoinColumn(name: 'idvehicule', referencedColumnName: 'idvehicule')]
    private ?Vehicule $vehicule = null;

    public function getIdmaintenance(): ?int
    {
        return $this->idmaintenance;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }


    // public function getIdvehicule(): ?Vehicule
    // {
    //     return $this->idvehicule;
    // }

    // public function setIdvehicule(?Vehicule $idvehicule): self
    // {
    //     $this->idvehicule = $idvehicule;

    //     return $this;
    // }

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
