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
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idrating=null;

    /**
     * @var int
     *
     * @ORM\Column(name="idvoiture", type="integer", nullable=false)
     */
    private $idvoiture;

    #[ORM\Column]
    private ?int $nbetoile=null;


}
