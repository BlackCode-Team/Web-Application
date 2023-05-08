<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository;
use App\Repository\VehiculeRepository;


#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
class Vehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("Vehicules")]
    private ?int $idvehicule= null;

    #[ORM\Column(length: 255)]
    #[Groups("Vehicules")]
    private ?string $status = 'disponible';

    #[ORM\Column(length: 255)]
    #[Groups("Vehicules")]
    private ?string $type=null;

    #[ORM\Column(length: 255)]
    #[Groups("Vehicules")]
    private ?string $modele=null;

    #[ORM\Column]
    #[Groups("Vehicules")]
    private ?int $prix=null;

    #[ORM\Column]
    #[Groups("Vehicules")]
    private ?int $batterie=null;

    #[ORM\Column(length: 255)]
    #[Groups("Vehicules")]
    private ?string $matricule=null;

    #[ORM\Column]
    #[Groups("Vehicules")]
    private ?int $puissance=null;

    #[ORM\Column(length: 255)]
    #[Groups("Vehicules")]
    private ?string $image=null;

    #[ORM\ManyToOne(targetEntity: Itineraire::class, inversedBy: 'Vehicule')]
    #[ORM\JoinColumn(name: 'iditineraire', referencedColumnName: 'iditineraire')]
    public ?Itineraire $itineraire;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIdvehicule(): ?int
    {
        return $this->idvehicule;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    // public function getItineraire(): ?Itineraire
    // {
    //     return $this->itineraire;
    // }

    // // public function setItineraire(?Itineraire $itineraire): self
    // // {
    // //     $this->itineraire = $itineraire;

    // //     return $this;
    // // }
    // public function getIditineraire(): ?int
    // {
    //     return $this->iditineraire;
    // }

   




}
