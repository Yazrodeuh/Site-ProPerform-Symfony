<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite")
 * @ORM\Entity
 */
class Actualite
{
    /**
     * @var int
     *
     * @ORM\Column(name="idActualite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactualite;

    /**
     * @var int
     *
     * @ORM\Column(name="idRubriqueFormation", type="integer", nullable=false)
     */
    private $idrubriqueformation;

    /**
     * @var string
     *
     * @ORM\Column(name="titreActualite", type="string", length=100, nullable=false)
     */
    private $titreactualite;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionActualite", type="text", length=65535, nullable=false)
     */
    private $descriptionactualite;

    /**
     * @var string
     *
     * @ORM\Column(name="texteActualite", type="text", length=65535, nullable=false)
     */
    private $texteactualite;

    /**
     * @var string
     *
     * @ORM\Column(name="imageActualite", type="text", length=65535, nullable=false)
     */
    private $imageactualite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateActualite", type="date", nullable=false)
     */
    private $dateactualite;


}
