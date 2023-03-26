<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="idbadge", columns={"idbadge"})})
 * @ORM\Entity
 */
class Offre
{
    /**
     * @var int
     *
     * @ORM\Column(name="idoffre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoffre;

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
