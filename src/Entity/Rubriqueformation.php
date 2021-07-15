<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rubriqueformation
 *
 * @ORM\Table(name="rubriqueformation")
 * @ORM\Entity
 */
class Rubriqueformation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRubrique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrubrique;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRubrique", type="string", length=30, nullable=false)
     */
    private $nomrubrique;

    /**
     * @var string
     *
     * @ORM\Column(name="aliasNomRubrique", type="string", length=100, nullable=false)
     */
    private $aliasnomrubrique;

    /**
     * @var string
     *
     * @ORM\Column(name="imgRubrique", type="string", length=100, nullable=false)
     */
    private $imgrubrique;

    /**
     * @var string
     *
     * @ORM\Column(name="pageRubrique", type="string", length=50, nullable=false)
     */
    private $pagerubrique;


}
