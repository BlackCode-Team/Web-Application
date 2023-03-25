<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository;
use App\Repository\VehiculeRepository;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VehiculeRepository")
 */
#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
class Vehicule
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idVehicule= null;

    #[ORM\Column(length: 255)]
    private ?string $status = 'disponible';

    #[ORM\Column(length: 255)]
    private ?string $type=null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modele", type="string", length=255, nullable=true)
     */
    private $modele;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var int|null
     *
     * @ORM\Column(name="batterie", type="integer", nullable=true)
     */
    private $batterie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matricule", type="string", length=255, nullable=true)
     */
    private $matricule;

    /**
     * @var int|null
     *
     * @ORM\Column(name="puissance", type="integer", nullable=true)
     */
    private $puissance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="iditineraire", type="integer", nullable=true)
     */
    private $iditineraire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var \Reservation
     *
     * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idreservation", referencedColumnName="idreservation")
     * })
     */
    private $idreservation;


}
