<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rubriqueformation
 *
 * @ORM\Table(name="rubriqueformation")
 * @ORM\Entity
 */
class RubriqueFormation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRubrique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $idRubriqueFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRubrique", type="string", length=30, nullable=false)
     */
    private string $nomrubriqueFormation;

    /**
     * @return int
     */
    public function getIdRubriqueFormation(): int
    {
        return $this->idRubriqueFormation;
    }

    /**
     * @param int $idRubriqueFormation
     */
    public function setIdRubriqueFormation(int $idRubriqueFormation): void
    {
        $this->idRubriqueFormation = $idRubriqueFormation;
    }

    /**
     * @return string
     */
    public function getNomrubriqueFormation(): string
    {
        return $this->nomrubriqueFormation;
    }

    /**
     * @param string $nomrubriqueFormation
     */
    public function setNomrubriqueFormation(string $nomrubriqueFormation): void
    {
        $this->nomrubriqueFormation = $nomrubriqueFormation;
    }




}
