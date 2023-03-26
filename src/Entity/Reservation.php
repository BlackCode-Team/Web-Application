<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="idvehicule", columns={"idvehicule"}), @ORM\Index(name="iditineraire", columns={"iditineraire"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idreservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prixreservation", type="integer", nullable=true)
     */
    private $prixreservation;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
     * })
     */
    private $iduser;

    /**
     * @var \Vehicule
     *
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idvehicule", referencedColumnName="idvehicule")
     * })
     */
    private $idvehicule;

    /**
     * @var \Itineraire
     *
     * @ORM\ManyToOne(targetEntity="Itineraire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iditineraire", referencedColumnName="iditineraire")
     * })
     */
    private $iditineraire;

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
