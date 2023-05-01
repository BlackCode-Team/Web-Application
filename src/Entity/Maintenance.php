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

    #[ORM\Column(length: 255)]
    private ?string $objet=null;

    #[ORM\Column(type: "datetime")]
     private ?\DateTimeInterface $datedebut;
     public function __construct()
     {
         $this->datedebut = new \DateTime();
     }
     #[ORM\Column(type: "datetime")]
     private ?\DateTimeInterface $datefin;

     #[ORM\ManyToOne(targetEntity: Vehicule::class, inversedBy: 'Reclamation')]
    #[ORM\JoinColumn(name: 'idvehicule', referencedColumnName: 'idvehicule')]
    private ?Vehicule $vehicule = null;

    public function getIdmaintenance(): ?int
    {
        return $this->idmaintenance;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }
    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

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
