<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Repository;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Utilisateur implements UserInterface , PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $iduser=null;

    #[ORM\Column(length: 255)]
    private ?string $role='client';

     /**
     * @ORM\Column(type="boolean")
     */
    private $isBlocked = false;

    
     #[ORM\Column( length:255)]
     #[Assert\Regex(
         pattern:"/^[a-zA-Z]*$/",
         
         )]
    private ?string $nom = null;


    #[ORM\Column( length:255)]
    #[Assert\Regex(
         pattern:"/^[a-zA-Z]*$/",
        
         )]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(
        min: 8,
        
    )]
    private ?string $pwd = null;

    #[ORM\Column(length: 255)]
    #[Assert\Email]
    private ?string $email=null;

   
    #[ORM\Column(length: 8)]
    #[Assert\Regex(
        pattern: '/^\d+$/',
       
        normalizer: 'trim'
    )]
    #[Assert\Length(
        min: 8,
        max: 8,
        
    )]
    private ?string $cin = null;

    #[ORM\Column(length: 9)]
    #[Assert\Regex(
        pattern: '/^\d+$/',
        
        normalizer: 'trim'
    )]
    #[Assert\Length(
        min: 9,
        max: 9,
       
    )]
    private ?string $permis = null;

    #[ORM\Column]
    private ?int $nbpoint=null;

    #[ORM\Column]
    private $roles;

    #[ORM\Column]
    private $resetToken;

    
    #[ORM\Column]
    private $authCode;








    
   # #[ORM\ManyToOne(targetEntity: Affectationbadge::class, inversedBy: 'Utilisateur')]
   # #[ORM\JoinColumn(name: 'idaffectation', referencedColumnName: 'idaffectation')]
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

    public function getpwd() : ?string
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
    
    public function getIsBlocked(): ?bool
    {
        return $this->isBlocked;
    }

    public function setIsBlocked(bool $isBlocked): self
    {
        $this->isBlocked = $isBlocked;

        return $this;
    }



    //////***************************************************implements methodes*************************************************************************** 
      /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    function setRoles($roles)
    {
        $this->roles[] = $roles;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->pwd;
    }

    public function setPassword(string $password): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(?string $resetToken): self
    {
        $this->resetToken = $resetToken;

        return $this;
    }

     /**
     * Return true if the user should do two-factor authentication.
     */
    public function isEmailAuthEnabled(): bool{
        return true;
    }

    /**
     * Return user email address.
     */
    public function getEmailAuthRecipient(): string{
        return $this->email;
    }

    /**
     * Return the authentication code.
     */
    public function getEmailAuthCode(): string{
        if (null == $this->authCode){
            throw new \LogicException('The emailauthentification was not set');
        }
        return $this->authCode;
    }

    /**
     * Set the authentication code.
     */
    public function setEmailAuthCode(string $authCode): void{
        $this->authCode = $authCode;
    }





}
