<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AmendeRepository;
use Repository;

#[ORM\Entity(repositoryClass: AmendeRepository::class)]

class Amende
{
   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idamende=null;

    #[ORM\Column(type: "datetime")]
     private ?\DateTimeInterface $date;

     #[ORM\Column]
     private ?int $montant=null;

     #[ORM\Column(length: 255)]
     private ?string $cause=null;

     #[ORM\Column(length: 255)]
     private ?string $description=null;

     #[ORM\Column(length: 255)]
    private ?string $statusamende;

    #[ORM\ManyToOne(targetEntity: Reservation::class, inversedBy: 'Amende')]
    #[ORM\JoinColumn(name: 'idreservation', referencedColumnName: 'idreservation')]
    private ?Reservation $idreservation=null ;

    public function getIdamende(): ?int
    {
        return $this->idamende;
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

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getCause(): ?string
    {
        return $this->cause;
    }

    public function setCause(string $cause): self
    {
        $this->cause = $cause;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStatusamende(): ?string
    {
        return $this->statusamende;
    }

    public function setStatusamende(string $statusamende): self
    {
        $this->statusamende = $statusamende;

        return $this;
    }

    public function getIdReservation(): ?Reservation
    {
        return $this->idreservation;
    }

    public function setIdReservation(?Reservation $idreservation): self
    {
        $this->idreservation = $idreservation;

        return $this;
    }

  


}
