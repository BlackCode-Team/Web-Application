<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\BadgeRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BadgeRepository::class)]

class Badge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("badges")]
    private ?int $idbadge=null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("badges")]
    private $typebadge;

    #[ORM\Column(nullable:false)]
    #[Groups("badges")]
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

    public function __toString()
    {
        return $this->typebadge; // Assuming that the "name" property represents the string representation of the object
    }
}
