<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Badge
 *
 * @ORM\Table(name="badge", uniqueConstraints={@ORM\UniqueConstraint(name="typebadge", columns={"typebadge"}), @ORM\UniqueConstraint(name="typebadge_2", columns={"typebadge"}), @ORM\UniqueConstraint(name="typebadge_3", columns={"typebadge"})})
 * @ORM\Entity
 */
class Badge
{
    /**
     * @var int
     *
     * @ORM\Column(name="idbadge", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbadge;

    /**
     * @var string
     *
     * @ORM\Column(name="typebadge", type="string", length=255, nullable=false)
     */
    private $typebadge;

    /**
     * @var int
     *
     * @ORM\Column(name="nbpoint", type="integer", nullable=false)
     */
    private $nbpoint;


}
