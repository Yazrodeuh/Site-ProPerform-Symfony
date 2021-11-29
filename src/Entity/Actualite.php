<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ActualiteRepository;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite")
 * @ORM\Entity(repositoryClass=ActualiteRepository::class)
 */
class Actualite
{
    /**
     * @var int
     * @ORM\Column(name="idActualite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $idactualite;

    /**
     * @var string
     * @ORM\Column(name="nomFormation", type="string", length=100, nullable=false)
     */
    private string $nomFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="titreActualite", type="string", length=100, nullable=false)
     */
    private string $titreactualite;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionActualite", type="text", length=65535, nullable=false)
     */
    private string $descriptionactualite;

    /**
     * @var string
     *
     * @ORM\Column(name="texteActualite", type="text", length=65535, nullable=false)
     */
    private string $texteactualite;

    /**
     * @var string
     *
     * @ORM\Column(name="imageActualite", type="text", length=65535, nullable=false)
     */
    private string $imageactualite;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateActualite", type="date", nullable=false)
     */
    private DateTime $dateactualite;

    /**
     * @return int
     */
    public function getIdactualite(): int
    {
        return $this->idactualite;
    }

    /**
     * @param int $idactualite
     */
    public function setIdactualite(int $idactualite): void
    {
        $this->idactualite = $idactualite;
    }

    /**
     * @return string
     */
    public function getNomFormation(): string
    {
        return $this->nomFormation;
    }

    /**
     * @param string $nomFormation
     */
    public function setNomFormation(string $nomFormation): void
    {
        $this->nomFormation = $nomFormation;
    }

    /**
     * @return string
     */
    public function getTitreactualite(): string
    {
        return $this->titreactualite;
    }

    /**
     * @param string $titreactualite
     */
    public function setTitreactualite(string $titreactualite): void
    {
        $this->titreactualite = $titreactualite;
    }

    /**
     * @return string
     */
    public function getDescriptionactualite(): string
    {
        return $this->descriptionactualite;
    }

    /**
     * @param string $descriptionactualite
     */
    public function setDescriptionactualite(string $descriptionactualite): void
    {
        $this->descriptionactualite = $descriptionactualite;
    }

    /**
     * @return string
     */
    public function getTexteactualite(): string
    {
        return $this->texteactualite;
    }

    /**
     * @param string $texteactualite
     */
    public function setTexteactualite(string $texteactualite): void
    {
        $this->texteactualite = $texteactualite;
    }

    /**
     * @return string
     */
    public function getImageactualite(): string
    {
        return $this->imageactualite;
    }

    /**
     * @param string $imageactualite
     */
    public function setImageactualite(string $imageactualite): void
    {
        $this->imageactualite = $imageactualite;
    }

    /**
     * @return DateTime
     */
    public function getDateactualite(): DateTime
    {
        return $this->dateactualite;
    }

    /**
     * @param DateTime $dateactualite
     */
    public function setDateactualite(DateTime $dateactualite): void
    {
        $this->dateactualite = $dateactualite;
    }




}
