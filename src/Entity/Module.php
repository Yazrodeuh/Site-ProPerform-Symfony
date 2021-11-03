<?php

namespace App\Entity;

use App\Repository\ModuleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModuleRepository::class)
 */
class Module
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $idModule;

    /**
     * @var string
     * @ORM\Column(type="string", length=150)
     */
    private string $nomModule;

    /**
     * @var string
     * @ORM\Column(type="string", length=10, unique=true)
     */
    private string $aliasModule;

    /**
     * @var string
     * @ORM\Column(type="string", length=35)
     */
    private string $dureeModule;

    /**
     * @var string|null
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $pourQuiModule;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $objectifModule;

    /**
     * @var string|null
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $organisationPedagoModule;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private int $prixModule;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $tarifInfoModule;

    /**
     * @var string|null
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $lieuModule;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $lieuDetailsModule;

    /**
     * @var string
     * @ORM\Column(type="string", length=150, unique=true)
     */
    private string $nomLienModule;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $prerequisModule;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $publicModule;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $delaisModule;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $objectifPedagoModule;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $modaliteModule;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $programmeModule;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $valeurModule;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private string $versionModule;

    /**
     * @var string
     * @ORM\Column(type="string", length=25)
     */
    private string $couleurModule;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private int $idFormation;

    /**
     * @return int
     */
    public function getIdModule(): int
    {
        return $this->idModule;
    }

    /**
     * @param int $idModule
     */
    public function setIdModule(int $idModule): void
    {
        $this->idModule = $idModule;
    }

    /**
     * @return string
     */
    public function getNomModule(): string
    {
        return $this->nomModule;
    }

    /**
     * @param string $nomModule
     * @return $this
     */
    public function setNomModule(string $nomModule): self
    {
        $this->nomModule = $nomModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getAliasModule(): string
    {
        return $this->aliasModule;
    }

    /**
     * @param string $aliasModule
     * @return $this
     */
    public function setAliasModule(string $aliasModule): self
    {
        $this->aliasModule = $aliasModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getDureeModule(): string
    {
        return $this->dureeModule;
    }

    /**
     * @param string $dureeModule
     * @return $this
     */
    public function setDureeModule(string $dureeModule): self
    {
        $this->dureeModule = $dureeModule;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPourQuiModule(): ?string
    {
        return $this->pourQuiModule;
    }

    /**
     * @param string|null $pourQuiModule
     * @return $this
     */
    public function setPourQuiModule(?string $pourQuiModule): self
    {
        $this->pourQuiModule = $pourQuiModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getObjectifModule(): string
    {
        return $this->objectifModule;
    }

    /**
     * @param string $objectifModule
     * @return $this
     */
    public function setObjectifModule(string $objectifModule): self
    {
        $this->objectifModule = $objectifModule;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrganisationPedagoModule(): ?string
    {
        return $this->organisationPedagoModule;
    }

    /**
     * @param string|null $organisationPedagoModule
     * @return $this
     */
    public function setOrganisationPedagoModule(?string $organisationPedagoModule): self
    {
        $this->organisationPedagoModule = $organisationPedagoModule;

        return $this;
    }

    /**
     * @return int
     */
    public function getPrixModule(): int
    {
        return $this->prixModule;
    }

    /**
     * @param int $prixModule
     * @return $this
     */
    public function setPrixModule(int $prixModule): self
    {
        $this->prixModule = $prixModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getTarifInfoModule(): string
    {
        return $this->tarifInfoModule;
    }

    /**
     * @param string $tarifInfoModule
     */
    public function setTarifInfoModule(string $tarifInfoModule): void
    {
        $this->tarifInfoModule = $tarifInfoModule;
    }

    /**
     * @return string
     */
    public function getLieuModule(): ?string
    {
        return $this->lieuModule;
    }

    /**
     * @param string|null $lieuModule
     * @return $this
     */
    public function setLieuModule(?string $lieuModule): self
    {
        $this->lieuModule = $lieuModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getLieuDetailsModule(): string
    {
        return $this->lieuDetailsModule;
    }

    /**
     * @param string $lieuDetailsModule
     */
    public function setLieuDetailsModule(string $lieuDetailsModule): void
    {
        $this->lieuDetailsModule = $lieuDetailsModule;
    }

    /**
     * @return string
     */
    public function getNomLienModule(): string
    {
        return $this->nomLienModule;
    }

    /**
     * @param string $nomLienModule
     * @return $this
     */
    public function setNomLienModule(string $nomLienModule): self
    {
        $this->nomLienModule = $nomLienModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrerequisModule(): string
    {
        return $this->prerequisModule;
    }

    /**
     * @param string $prerequisModule
     * @return $this
     */
    public function setPrerequisModule(string $prerequisModule): self
    {
        $this->prerequisModule = $prerequisModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getPublicModule(): string
    {
        return $this->publicModule;
    }

    /**
     * @param string $publicModule
     * @return $this
     */
    public function setPublicModule(string $publicModule): self
    {
        $this->publicModule = $publicModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getDelaisModule(): string
    {
        return $this->delaisModule;
    }

    /**
     * @param string $delaisModule
     * @return $this
     */
    public function setDelaisModule(string $delaisModule): self
    {
        $this->delaisModule = $delaisModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getObjectifPedagoModule(): string
    {
        return $this->objectifPedagoModule;
    }

    /**
     * @param string $objectifPedagoModule
     * @return $this
     */
    public function setObjectifPedagoModule(string $objectifPedagoModule): self
    {
        $this->objectifPedagoModule = $objectifPedagoModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getModaliteModule(): string
    {
        return $this->modaliteModule;
    }

    /**
     * @param string $modaliteModule
     * @return $this
     */
    public function setModaliteModule(string $modaliteModule): self
    {
        $this->modaliteModule = $modaliteModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getProgrammeModule(): string
    {
        return $this->programmeModule;
    }

    /**
     * @param string $programmeModule
     * @return $this
     */
    public function setProgrammeModule(string $programmeModule): self
    {
        $this->programmeModule = $programmeModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getValeurModule(): string
    {
        return $this->valeurModule;
    }

    /**
     * @param string $valeurModule
     * @return $this
     */
    public function setValeurModule(string $valeurModule): self
    {
        $this->valeurModule = $valeurModule;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersionModule(): string
    {
        return $this->versionModule;
    }

    /**
     * @param string $versionModule
     * @return $this
     */
    public function setVersionModule(string $versionModule): self
    {
        $this->versionModule = $versionModule;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdFormation(): int
    {
        return $this->idFormation;
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
    public function getCouleurModule(): string
    {
        return $this->couleurModule;
    }

    /**
     * @param string $couleurModule
     */
    public function setCouleurModule(string $couleurModule): void
    {
        $this->couleurModule = $couleurModule;
    }
}
