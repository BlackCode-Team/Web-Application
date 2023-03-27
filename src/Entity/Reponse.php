<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\ResponseRepository;

#[ORM\Entity(repositoryClass: ResponseRepository::class)]

class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?inr $idreponse=null;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datereponse", type="date", nullable=false)
     */
    private $datereponse;

    /**
     * @var int
     *
     * @ORM\Column(name="idagent", type="integer", nullable=false)
     */
    private $idagent;

    /**
     * @var int
     *
     * @ORM\Column(name="idclient", type="integer", nullable=false)
     */
    private $idclient;

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

    public function getIdagent(): ?int
    {
        return $this->idagent;
    }

    public function setIdagent(int $idagent): self
    {
        $this->idagent = $idagent;

        return $this;
    }

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function setIdclient(int $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }


}
