<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\ParkRepository;


#[ORM\Entity(repositoryClass: ParkRepository::class)]
class Park
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("parks")]
    private ?int $idpark= null;

    #[ORM\Column(length: 255)]
    #[Groups("parks")]
    private ?string $nom= null;

    #[ORM\Column(length: 255)]
    #[Groups("parks")]
    private ?string $ville= null;

    #[ORM\Column]
    #[Groups("parks")]
    private ?int $nbspot= null;

    #[ORM\Column(length: 255)]
    #[Groups("parks")]
    private ?string $statut= null;

    public function getIdpark(): ?int
    {
        return $this->idpark;
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

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getNbspot(): ?int
    {
        return $this->nbspot;
    }

    public function setNbspot(int $nbspot): self
    {
        $this->nbspot = $nbspot;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }


}
