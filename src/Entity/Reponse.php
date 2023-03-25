<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="idreponse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreponse;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datereponse", type="date", nullable=false)
     */
    private $datereponse;

    /**
     * @var int
     *
     * @ORM\Column(name="idagent", type="integer", nullable=false)
     */
    private $idagent;

    /**
     * @var int
     *
     * @ORM\Column(name="idclient", type="integer", nullable=false)
     */
    private $idclient;


}
