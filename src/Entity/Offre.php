<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\OffreRepository;

#[ORM\Entity(repositoryClass: OffreRepository::class)]

class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $idoffre=null;

    #[ORM\Column(length: 255, nullable: true)]
    private $nom;

    #[ORM\Column(nullable:false)]
    private $tauxderemise;

    #[ORM\Column(length: 255, nullable: true)]
    private $description;

    #[ORM\ManyToOne(targetEntity: "Badge", fetch: "EAGER")]
    #[ORM\JoinColumn(name: "idbadge", referencedColumnName: "idbadge")]
    private ?Badge $idbadge;

    
    public function getIdoffre(): ?int
    {
        return $this->idoffre;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTauxderemise(): ?int
    {
        return $this->tauxderemise;
    }

    public function setTauxderemise(int $tauxderemise): self
    {
        $this->tauxderemise = $tauxderemise;

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

    public function getIdbadge(): ?Badge
    {
        return $this->idbadge;
    }

    public function setIdbadge(?Badge $idbadge): self
    {
        $this->idbadge = $idbadge;

        return $this;
    }


}
