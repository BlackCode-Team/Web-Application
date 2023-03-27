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
    #[ORM\Column]
    private ?int $idoffre=null;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="tauxderemise", type="integer", nullable=false)
     */
    private $tauxderemise;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Badge
     *
     * @ORM\ManyToOne(targetEntity="Badge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idbadge", referencedColumnName="idbadge")
     * })
     */
    private $idbadge;

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
