<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="idaffectation", columns={"idaffectation"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

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


}
