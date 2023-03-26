<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affectationbadge
 *
 * @ORM\Table(name="affectationbadge", indexes={@ORM\Index(name="idbadge", columns={"idbadge"}), @ORM\Index(name="iduser", columns={"iduser"})})
 * @ORM\Entity
 */
class Affectationbadge
{
    /**
     * @var int
     *
     * @ORM\Column(name="idaffectation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaffectation;

    /**
     * @var \Badge
     *
     * @ORM\ManyToOne(targetEntity="Badge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idbadge", referencedColumnName="idbadge")
     * })
     */
    private $idbadge;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
     * })
     */
    private $iduser;

    public function getIdaffectation(): ?int
    {
        return $this->idaffectation;
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

    public function getIduser(): ?Utilisateur
    {
        return $this->iduser;
    }

    public function setIduser(?Utilisateur $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }


}
