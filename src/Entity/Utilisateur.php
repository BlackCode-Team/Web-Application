<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]

class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $iduser=null;

    #[ORM\Column(length: 255)]
    private ?string $role=null;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z]*$/",
     *     message="Le nom ne doit contenir que des lettres"
     * )
     */
    private ?string $nom = null;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z]*$/",
     *     message="Le prénom ne doit contenir que des lettres"
     * )
     */
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex(
        pattern: '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
        message: 'Le mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre et un symbole spécial'
    )]
    private ?string $pwd = null;

    #[ORM\Column(length: 255)]
    #[Assert\Email]
    private ?string $email=null;

    /**
 * @ORM\Column(length=8)
 * @Assert\Length(
 *      min = 8,
 *      exactMessage = "Le numéro de cin doit contenir exactement {{ limit }} chiffres.",
 *      allowEmptyString = false
 * )
 */
    private ?string $cin = null;

    /**
     * @ORM\Column(length=9)
     * @Assert\Length(
     *       min = 9,
     *      exactMessage = "Le numéro de permis doit contenir exactement {{ limit }} chiffres.",
     *      allowEmptyString = false
     * )
     */
    private ?string $permis = null;

    #[ORM\Column]
    private ?int $nbpoint=null;



    
    #[ORM\ManyToOne(targetEntity: Affectationbadge::class, inversedBy: 'Utilisateur')]
    #[ORM\JoinColumn(name: 'idaffectation', referencedColumnName: 'idaffectation')]
    private ?int $idaffectation=null;

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
