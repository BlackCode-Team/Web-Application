<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Table(name="rating")
 * @ORM\Entity
 */
class Rating
{
    /**
     * @var int
     *
     * @ORM\Column(name="idrating", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrating;

    /**
     * @var int
     *
     * @ORM\Column(name="idvoiture", type="integer", nullable=false)
     */
    private $idvoiture;

    /**
     * @var int
     *
     * @ORM\Column(name="nbetoile", type="integer", nullable=false)
     */
    private $nbetoile;

    public function getIdrating(): ?int
    {
        return $this->idrating;
    }

    public function getIdvoiture(): ?int
    {
        return $this->idvoiture;
    }

    public function setIdvoiture(int $idvoiture): self
    {
        $this->idvoiture = $idvoiture;

        return $this;
    }

    public function getNbetoile(): ?int
    {
        return $this->nbetoile;
    }

    public function setNbetoile(int $nbetoile): self
    {
        $this->nbetoile = $nbetoile;

        return $this;
    }


}
