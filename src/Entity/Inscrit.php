<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscrit
 *
 * @ORM\Table(name="inscrit")
 * @ORM\Entity
 */
class Inscrit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idInscrit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinscrit;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomInscrit", type="string", length=100, nullable=false)
     */
    private $prenominscrit;

    /**
     * @var string
     *
     * @ORM\Column(name="nomInscrit", type="string", length=100, nullable=false)
     */
    private $nominscrit;

    /**
     * @var string
     *
     * @ORM\Column(name="mailInscrit", type="string", length=100, nullable=false)
     */
    private $mailinscrit;

    /**
     * @var string
     *
     * @ORM\Column(name="telInscrit", type="string", length=10, nullable=false)
     */
    private $telinscrit;

    /**
     * @var string
     *
     * @ORM\Column(name="nomFormation", type="string", length=150, nullable=false)
     */
    private $nomformation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateTotInscrit", type="date", nullable=false)
     */
    private $datetotinscrit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateTardInscrit", type="date", nullable=false)
     */
    private $datetardinscrit;


}
