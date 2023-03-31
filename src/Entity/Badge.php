<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\BadgeRepository;

#[ORM\Entity(repositoryClass: BadgeRepository::class)]

class Badge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idbadge=null;

    #[ORM\Column(length: 255, nullable: true)]
    private $typebadge;

    #[ORM\Column(nullable:false)]
    private $nbpoint;

    public function getIdbadge(): ?int
    {
        return $this->idbadge;
    }

    public function getTypebadge(): ?string
    {
        return $this->typebadge;
    }

    public function setTypebadge(string $typebadge): self
    {
        $this->typebadge = $typebadge;

        return $this;
    }

    public function getNbpoint(): ?int
    {
        return $this->nbpoint;
    }

    public function setNbpoint(int $nbpoint): self
    {
        $this->nbpoint = $nbpoint;

        return $this;
    }


}
