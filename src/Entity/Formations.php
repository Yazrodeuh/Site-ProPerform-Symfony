<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formations
 *
 * @ORM\Table(name="formations")
 * @ORM\Entity
 */
class Formations
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFormations", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformations;

    /**
     * @var string
     *
     * @ORM\Column(name="petitTitreFormations", type="string", length=50, nullable=false)
     */
    private $petittitreformations;

    /**
     * @var string
     *
     * @ORM\Column(name="grandTitreFormations", type="string", length=50, nullable=false)
     */
    private $grandtitreformations;

    /**
     * @var string
     *
     * @ORM\Column(name="aliasFormations", type="string", length=5, nullable=false)
     */
    private $aliasformations;

    /**
     * @var string
     *
     * @ORM\Column(name="dureeFormations", type="string", length=30, nullable=false)
     */
    private $dureeformations;

    /**
     * @var string
     *
     * @ORM\Column(name="pourQuiFormations", type="text", length=65535, nullable=false)
     */
    private $pourquiformations;

    /**
     * @var string
     *
     * @ORM\Column(name="objectifsFormations", type="text", length=65535, nullable=false)
     */
    private $objectifsformations;

    /**
     * @var string
     *
     * @ORM\Column(name="orgaPedagoFormations", type="text", length=65535, nullable=false)
     */
    private $orgapedagoformations;

    /**
     * @var string
     *
     * @ORM\Column(name="documentsFormations", type="string", length=150, nullable=false)
     */
    private $documentsformations;

    /**
     * @var float
     *
     * @ORM\Column(name="prixFormations", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixformations;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuFormations", type="text", length=65535, nullable=false)
     */
    private $lieuformations;

    /**
     * @var int
     *
     * @ORM\Column(name="idRubriqueFormation", type="integer", nullable=false)
     */
    private $idrubriqueformation;


}
