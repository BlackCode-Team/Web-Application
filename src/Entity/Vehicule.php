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

    #[ORM\Column(length: 255)]
    private ?string $modele=null;

    #[ORM\Column]
    private ?int $prix=null;

    #[ORM\Column]
    private ?int $batterie=null;

    #[ORM\Column(length: 255)]
    private ?string $matricule=null;

    #[ORM\Column]
    private ?int $puissance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="iditineraire", type="integer", nullable=true)
     */
    private $iditineraire;

    #[ORM\Column(length: 255)]
    private ?string $image=null;

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
