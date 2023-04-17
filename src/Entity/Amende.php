<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Amende
 *
 * @ORM\Table(name="amende", indexes={@ORM\Index(name="idreservation", columns={"idreservation"})})
 * @ORM\Entity
 */
class Amende
{
    /**
     * @var int
     *
     * @ORM\Column(name="idamende", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idamende;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="cause", type="string", length=255, nullable=false)
     */
    private $cause;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="statusamende", type="string", length=255, nullable=false)
     */
    private $statusamende;

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
