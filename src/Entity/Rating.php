<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\RatingRepository;

#[ORM\Entity(repositoryClass: RatingRepository::class)]

class Rating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idrating=null;

    /**
     * @var int
     *
     * @ORM\Column(name="idvoiture", type="integer", nullable=false)
     */
    private $idvoiture;

    #[ORM\Column]
    private ?int $nbetoile=null;

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
