<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormationRepository::class)
 */
class Formation
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $idFormation;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private string $nomFormation;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private string $vignetteFormation;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private string $pathFormation;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $titrePage;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $textEntete;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $phraseFormation;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private string $backgroundImgFormation;

    /**
     * @var string
     * @ORM\Column(type="string", length=25)
     */
    private string $colorFormation;

    /**
     * @return int
     */
    public function getIdFormation(): int
    {
        return $this->idFormation;
    }

    /**
     * @return string|null
     */
    public function getNomFormation(): ?string
    {
        return $this->nomFormation;
    }

    /**
     * @param string $nomFormation
     * @return $this
     */
    public function setNomFormation(string $nomFormation): self
    {
        $this->nomFormation = $nomFormation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVignetteFormation(): ?string
    {
        return $this->vignetteFormation;
    }

    /**
     * @param string $vignetteFormation
     * @return $this
     */
    public function setVignetteFormation(string $vignetteFormation): self
    {
        $this->vignetteFormation = $vignetteFormation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPathFormation(): ?string
    {
        return $this->pathFormation;
    }

    /**
     * @param string $pathFormation
     * @return $this
     */
    public function setPathFormation(string $pathFormation): self
    {
        $this->pathFormation = $pathFormation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitrePage(): ?string
    {
        return $this->titrePage;
    }

    /**
     * @param string $titrePage
     * @return $this
     */
    public function setTitrePage(string $titrePage): self
    {
        $this->titrePage = $titrePage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextEntete(): ?string
    {
        return $this->textEntete;
    }

    /**
     * @param string $textEntete
     * @return $this
     */
    public function setTextEntete(string $textEntete): self
    {
        $this->textEntete = $textEntete;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhraseFormation(): ?string
    {
        return $this->phraseFormation;
    }

    /**
     * @param string $phraseFormation
     * @return $this
     */
    public function setPhraseFormation(string $phraseFormation): self
    {
        $this->phraseFormation = $phraseFormation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBackgroundImgFormation(): ?string
    {
        return $this->backgroundImgFormation;
    }

    /**
     * @param string $backgroundImgFormation
     * @return $this
     */
    public function setBackgroundImgFormation(string $backgroundImgFormation): self
    {
        $this->backgroundImgFormation = $backgroundImgFormation;

        return $this;
    }

    /**
     * @param int $idFormation
     */
    public function setIdFormation(int $idFormation): void
    {
        $this->idFormation = $idFormation;
    }

    /**
     * @return string
     */
    public function getColorFormation(): string
    {
        return $this->colorFormation;
    }

    /**
     * @param string $colorFormation
     */
    public function setColorFormation(string $colorFormation): void
    {
        $this->colorFormation = $colorFormation;
    }
}
