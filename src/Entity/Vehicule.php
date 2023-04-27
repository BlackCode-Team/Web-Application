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
    private ?int $idvehicule= null;

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
    private ?int $puissance=null;

    #[ORM\Column(length: 255)]
    private ?string $image=null;

    #[ORM\ManyToOne(targetEntity: Park::class, inversedBy: 'Vehicule')]
    #[ORM\JoinColumn(name: 'idpark', referencedColumnName: 'idpark')]
    private ?Park $park=null;

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

    public function getPark(): ?Park
    {
        return $this->park;
    }

    public function setPark(?Park $park): self
    {
        $this->park = $park;

        return $this;
    }
    public function getIdpark(): ?int
    {
        return $this->idpark;
    }

    public function setIdpark(int $idpark): self
    {
        $this->idpark = $idpark;

        return $this;
    }




}
