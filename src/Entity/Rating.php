<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Table(name="rating")
 * @ORM\Entity
 */
class Rating
{
    /**
     * @var int
     *
     * @ORM\Column(name="idrating", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrating;

    /**
     * @var int
     *
     * @ORM\Column(name="idvoiture", type="integer", nullable=false)
     */
    private $idvoiture;

    /**
     * @var int
     *
     * @ORM\Column(name="nbetoile", type="integer", nullable=false)
     */
    private $nbetoile;


}
