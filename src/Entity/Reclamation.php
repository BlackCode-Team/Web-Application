<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\ReclamationRepository;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]

class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idreclamation=null;

    
    #[ORM\Column(length: 255)]
    private ?string $objet=null;

    #[ORM\Column(length: 255)]
    private ?string $contenu=null;


    #[ORM\Column(type: "date")]
     private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $statut=null;


    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'Reclamation')]
    #[ORM\JoinColumn(name: 'iduser', referencedColumnName: 'iduser')]
    private ?Utilisateur $utilisateur=null ;

    #[ORM\ManyToOne(targetEntity: Vehicule::class, inversedBy: 'Reclamation')]
    #[ORM\JoinColumn(name: 'idvehicule', referencedColumnName: 'idvehicule')]
    private ?Vehicule $vehicule = null;


    public function getIdreclamation(): ?int
    {
        return $this->idreclamation;
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

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
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

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

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
