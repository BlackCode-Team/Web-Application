<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Itineraire
 *
 * @ORM\Table(name="itineraire")
 * @ORM\Entity
 */
class Itineraire
{
    /**
     * @var int
     *
     * @ORM\Column(name="iditineraire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iditineraire;

    /**
     * @var string
     *
     * @ORM\Column(name="pointdepart", type="string", length=255, nullable=false)
     */
    private $pointdepart;

    /**
     * @var string
     *
     * @ORM\Column(name="pointarrivee", type="string", length=255, nullable=false)
     */
    private $pointarrivee;

    /**
     * @var float
     *
     * @ORM\Column(name="kilometrage", type="float", precision=10, scale=0, nullable=false)
     */
    private $kilometrage;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeestimee", type="integer", nullable=false)
     */
    private $dureeestimee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_usage", type="integer", nullable=true)
     */
    private $nbUsage;


}
