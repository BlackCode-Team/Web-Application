<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\HistoriqueRepository;

#[ORM\Entity(repositoryClass: HistoriqueRepository::class)]

class Historique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idhistorique=null;


    
     #[ORM\ManyToOne(targetEntity: Reservation::class, inversedBy: 'Historique')]
     #[ORM\JoinColumn(name: 'idreservation', referencedColumnName: 'idreservation')]
     private ?Reservation $reservation = null;
 


    public function getIdhistorique(): ?int
    {
        return $this->idhistorique;
    }
    public function getReservation(): ?Reservation
    {
        return $this->reservation;
    }

    public function setReservation(?Reservation $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }


}
