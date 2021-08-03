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
    private int $idrubrique;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRubrique", type="string", length=30, nullable=false)
     */
    private string $nomrubrique;

    /**
     * @var string
     *
     * @ORM\Column(name="aliasNomRubrique", type="string", length=100, nullable=false)
     */
    private string $aliasnomrubrique;

    /**
     * @var string
     *
     * @ORM\Column(name="imgRubrique", type="string", length=100, nullable=false)
     */
    private string $imgrubrique;

    /**
     * @var string
     *
     * @ORM\Column(name="pageRubrique", type="string", length=50, nullable=false)
     */
    private string $pagerubrique;

    /**
     * @return int
     */
    public function getIdrubrique(): int
    {
        return $this->idrubrique;
    }

    /**
     * @param int $idrubrique
     */
    public function setIdrubrique(int $idrubrique): void
    {
        $this->idrubrique = $idrubrique;
    }

    /**
     * @return string
     */
    public function getNomrubrique(): string
    {
        return $this->nomrubrique;
    }

    /**
     * @param string $nomrubrique
     */
    public function setNomrubrique(string $nomrubrique): void
    {
        $this->nomrubrique = $nomrubrique;
    }

    /**
     * @return string
     */
    public function getAliasnomrubrique(): string
    {
        return $this->aliasnomrubrique;
    }

    /**
     * @param string $aliasnomrubrique
     */
    public function setAliasnomrubrique(string $aliasnomrubrique): void
    {
        $this->aliasnomrubrique = $aliasnomrubrique;
    }

    /**
     * @return string
     */
    public function getImgrubrique(): string
    {
        return $this->imgrubrique;
    }

    /**
     * @param string $imgrubrique
     */
    public function setImgrubrique(string $imgrubrique): void
    {
        $this->imgrubrique = $imgrubrique;
    }

    /**
     * @return string
     */
    public function getPagerubrique(): string
    {
        return $this->pagerubrique;
    }

    /**
     * @param string $pagerubrique
     */
    public function setPagerubrique(string $pagerubrique): void
    {
        $this->pagerubrique = $pagerubrique;
    }




}
