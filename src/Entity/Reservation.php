<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\ReservationRepository;
use DateTimeInterface;
use App\Entity\Utilisateur;
use App\Entity\Vehicule;
use App\Entity\Itineraire;
#[ORM\Entity(repositoryClass: ReservationRepository::class)]

class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("reservations")]
    private ?int $idreservation=null;

 
    #[ORM\Column(type: "datetime")]
    #[Groups("reservations")]

     private ?\DateTimeInterface $datedebut;
     public function __construct()
     {
         $this->datedebut = new \DateTime();
     }
     #[ORM\Column(type: "datetime")]
     #[Groups("reservations")]

     private ?\DateTimeInterface $datefin;
   
    #[ORM\Column(length: 255)]
    #[Groups("reservations")]

    private ?string $status ="En cours";
   
    #[ORM\Column]
    #[Groups("reservations")]
    private ?int $prixreservation=null;
    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'Reservations')]
    #[ORM\JoinColumn(name: 'iduser', referencedColumnName: 'iduser')]
    
    private ?Utilisateur $utilisateur=null ;

    #[ORM\ManyToOne(targetEntity: Vehicule::class, inversedBy: 'Reservations')]
    #[ORM\JoinColumn(name: 'idvehicule', referencedColumnName: 'idvehicule')]
    private ?Vehicule $vehicule = null;

    #[ORM\ManyToOne(targetEntity: Itineraire::class, inversedBy: 'Reservations')]
    #[ORM\JoinColumn(name: 'iditineraire', referencedColumnName: 'iditineraire')]
    private ?Itineraire $itineraire = null;

    public function getIdreservation(): ?int
    {
        return $this->idreservation;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPrixreservation(): ?int
    {
        return $this->prixreservation;
    }

    public function setPrixreservation(?int $prixreservation): self
    {
        $this->prixreservation = $prixreservation;

        return $this;
    }

  
    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

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
    public function getItineraire(): ?Itineraire
    {
        return $this->itineraire;
    }

    public function setItineraire(?Itineraire $itineraire): self
    {
        $this->itineraire = $itineraire;

        return $this;
    }
  

}


