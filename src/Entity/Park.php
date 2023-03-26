<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Park
 *
 * @ORM\Table(name="park")
 * @ORM\Entity
 */
class Park
{
    /**
     * @var int
     *
     * @ORM\Column(name="idpark", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpark;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="nbspot", type="integer", nullable=false)
     */
    private $nbspot;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=false)
     */
    private $statut;

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
