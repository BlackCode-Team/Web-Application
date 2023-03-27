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

    /**
     * @var \Reservation
     *
     * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idreservation", referencedColumnName="idreservation")
     * })
     */
    private $idreservation;

    public function getIdhistorique(): ?int
    {
        return $this->idhistorique;
    }

    public function getIdreservation(): ?Reservation
    {
        return $this->idreservation;
    }

    public function setIdreservation(?Reservation $idreservation): self
    {
        $this->idreservation = $idreservation;

        return $this;
    }


}
