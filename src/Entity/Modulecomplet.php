<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modulecomplet
 *
 * @ORM\Table(name="modulecomplet")
 * @ORM\Entity
 */
class Modulecomplet
{
    /**
     * @var int
     *
     * @ORM\Column(name="idModuleComplet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="sectionModuleComplet", type="string", length=200, nullable=false)
     */
    private $sectionmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="nomModuleComplet", type="string", length=200, nullable=false)
     */
    private $nommodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="prerequisModuleComplet", type="text", length=65535, nullable=false)
     */
    private $prerequismodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="publicModuleComplet", type="text", length=65535, nullable=false)
     */
    private $publicmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="dureeModuleComplet", type="text", length=65535, nullable=false)
     */
    private $dureemodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="delaisModuleComplet", type="text", length=65535, nullable=false)
     */
    private $delaismodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuModuleComplet", type="text", length=65535, nullable=false)
     */
    private $lieumodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="objectifsModuleComplet", type="text", length=65535, nullable=false)
     */
    private $objectifsmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="modalitesModuleComplet", type="text", length=65535, nullable=false)
     */
    private $modalitesmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="programmeModuleComplet", type="text", length=65535, nullable=false)
     */
    private $programmemodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="tarifsModuleComplet", type="text", length=65535, nullable=false)
     */
    private $tarifsmodulecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="valeurModuleComplet", type="text", length=65535, nullable=false)
     */
    private $valeurmodulecomplet;


}
