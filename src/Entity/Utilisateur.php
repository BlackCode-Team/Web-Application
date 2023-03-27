<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\UtilisateurRepository;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]

class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $iduser=null;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255, nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=255, nullable=false)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cin", type="string", length=255, nullable=true)
     */
    private $cin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="permis", type="string", length=255, nullable=true)
     */
    private $permis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbpoint", type="integer", nullable=true)
     */
    private $nbpoint;

    /**
     * @var \Affectationbadge
     *
     * @ORM\ManyToOne(targetEntity="Affectationbadge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idaffectation", referencedColumnName="idaffectation")
     * })
     */
    private $idaffectation;

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(?string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getPermis(): ?string
    {
        return $this->permis;
    }

    public function setPermis(?string $permis): self
    {
        $this->permis = $permis;

        return $this;
    }

    public function getNbpoint(): ?int
    {
        return $this->nbpoint;
    }

    public function setNbpoint(?int $nbpoint): self
    {
        $this->nbpoint = $nbpoint;

        return $this;
    }

    public function getIdaffectation(): ?Affectationbadge
    {
        return $this->idaffectation;
    }

    public function setIdaffectation(?Affectationbadge $idaffectation): self
    {
        $this->idaffectation = $idaffectation;

        return $this;
    }


}
