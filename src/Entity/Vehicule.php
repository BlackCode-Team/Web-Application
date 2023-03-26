<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository;
use App\Repository\VehiculeRepository;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VehiculeRepository")
 */
#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
class Vehicule
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idVehicule= null;

    #[ORM\Column(length: 255)]
    private ?string $status = 'disponible';

    #[ORM\Column(length: 255)]
    private ?string $type=null;

    #[ORM\Column(length: 255)]
    private ?string $modele=null;

    #[ORM\Column]
    private ?int $prix=null;

    #[ORM\Column]
    private ?int $batterie=null;

    #[ORM\Column(length: 255)]
    private ?string $matricule=null;

    #[ORM\Column]
    private ?int $puissance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="iditineraire", type="integer", nullable=true)
     */
    private $iditineraire;

    #[ORM\Column(length: 255)]
    private ?string $image=null;

    /**
     * @var \Reservation
     *
     * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idreservation", referencedColumnName="idreservation")
     * })
     */
    private $idreservation;

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(?string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getBatterie(): ?int
    {
        return $this->batterie;
    }

    public function setBatterie(?int $batterie): self
    {
        $this->batterie = $batterie;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getPuissance(): ?int
    {
        return $this->puissance;
    }

    public function setPuissance(?int $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getIditineraire(): ?int
    {
        return $this->iditineraire;
    }

    public function setIditineraire(?int $iditineraire): self
    {
        $this->iditineraire = $iditineraire;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
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
