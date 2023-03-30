<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\ReservationRepository;
use DateTimeInterface;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]

class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idreservation=null;

     /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $datedebut = null;
     /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $datefin = null;

   
 /*   #[ORM\Column(type: 'date')]
    private ?DateTime $datedebut = null;
    #[ORM\Column(type: 'date')]
    private ?DateTime $datefin = null;*/

    #[ORM\Column(length: 255)]
    private ?string $status ;
   
    #[ORM\Column]
    private ?int $prixreservation=null;
    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'Reservations')]
    #[ORM\JoinColumn(name: 'iduser', referencedColumnName: 'iduser')]
    private ?Utilisateur $utilisateur=null ;

    #[ORM\ManyToOne(targetEntity: Vehicule::class, inversedBy: 'Reservations')]
    #[ORM\JoinColumn(name: 'idvehicule', referencedColumnName: 'idvehicule')]
    private ?Vehicule $vehicule = null;

    #[ORM\ManyToOne(targetEntity: Itineraire::class, inversedBy: 'Reservations')]
    #[ORM\JoinColumn(name: 'iditineraire', referencedColumnName: 'iditineraire')]
    private ?Itineraire $iditineraire = null;

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

    public function getIduser(): ?Utilisateur
    {
        return $this->iduser;
    }

    public function setIduser(?Utilisateur $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdvehicule(): ?Vehicule
    {
        return $this->idvehicule;
    }

    public function setIdvehicule(?Vehicule $idvehicule): self
    {
        $this->idvehicule = $idvehicule;

        return $this;
    }

    public function getIditineraire(): ?Itineraire
    {
        return $this->iditineraire;
    }

    public function setIditineraire(?Itineraire $iditineraire): self
    {
        $this->iditineraire = $iditineraire;

        return $this;
    }


}


