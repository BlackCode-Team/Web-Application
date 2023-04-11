<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\ResponseRepository;

#[ORM\Entity(repositoryClass: ResponseRepository::class)]

class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idreponse=null;

    #[ORM\Column(length: 255)]
    private ?string $description=null;

    
    #[ORM\Column(type: "date")]
    private ?\DateTimeInterface $datereponse=null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'Reponse')]
    #[ORM\JoinColumn(name: 'iduser', referencedColumnName: 'iduser')]
    private ?int $iduser=null ;
    

    public function getIdreponse(): ?int
    {
        return $this->idreponse;
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

    public function getDatereponse(): ?\DateTimeInterface
    {
        return $this->datereponse;
    }

    public function setDatereponse(\DateTimeInterface $datereponse): self
    {
        $this->datereponse = $datereponse;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(?int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    
   


}
