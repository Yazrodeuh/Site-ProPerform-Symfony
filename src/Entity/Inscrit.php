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
    private int $idinscrit;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomInscrit", type="string", length=100, nullable=false)
     */
    private string $prenominscrit;

    /**
     * @var string
     *
     * @ORM\Column(name="nomInscrit", type="string", length=100, nullable=false)
     */
    private string $nominscrit;

    /**
     * @var string
     *
     * @ORM\Column(name="mailInscrit", type="string", length=100, nullable=false)
     */
    private string $mailinscrit;

    /**
     * @var string
     *
     * @ORM\Column(name="telInscrit", type="string", length=10, nullable=false)
     */
    private string $telinscrit;

    /**
     * @var string
     *
     * @ORM\Column(name="nomFormation", type="string", length=150, nullable=false)
     */
    private string $nomformation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateTotInscrit", type="date", nullable=false)
     */
    private \DateTime $datetotinscrit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateTardInscrit", type="date", nullable=false)
     */
    private \DateTime $datetardinscrit;

    /**
     * @return int
     */
    public function getIdinscrit(): int
    {
        return $this->idinscrit;
    }

    /**
     * @param int $idinscrit
     */
    public function setIdinscrit(int $idinscrit): void
    {
        $this->idinscrit = $idinscrit;
    }

    /**
     * @return string
     */
    public function getPrenominscrit(): string
    {
        return $this->prenominscrit;
    }

    /**
     * @param string $prenominscrit
     */
    public function setPrenominscrit(string $prenominscrit): void
    {
        $this->prenominscrit = $prenominscrit;
    }

    /**
     * @return string
     */
    public function getNominscrit(): string
    {
        return $this->nominscrit;
    }

    /**
     * @param string $nominscrit
     */
    public function setNominscrit(string $nominscrit): void
    {
        $this->nominscrit = $nominscrit;
    }

    /**
     * @return string
     */
    public function getMailinscrit(): string
    {
        return $this->mailinscrit;
    }

    /**
     * @param string $mailinscrit
     */
    public function setMailinscrit(string $mailinscrit): void
    {
        $this->mailinscrit = $mailinscrit;
    }

    /**
     * @return string
     */
    public function getTelinscrit(): string
    {
        return $this->telinscrit;
    }

    /**
     * @param string $telinscrit
     */
    public function setTelinscrit(string $telinscrit): void
    {
        $this->telinscrit = $telinscrit;
    }

    /**
     * @return string
     */
    public function getNomformation(): string
    {
        return $this->nomformation;
    }

    /**
     * @param string $nomformation
     */
    public function setNomformation(string $nomformation): void
    {
        $this->nomformation = $nomformation;
    }

    /**
     * @return \DateTime
     */
    public function getDatetotinscrit(): \DateTime
    {
        return $this->datetotinscrit;
    }

    /**
     * @param \DateTime $datetotinscrit
     */
    public function setDatetotinscrit(\DateTime $datetotinscrit): void
    {
        $this->datetotinscrit = $datetotinscrit;
    }

    /**
     * @return \DateTime
     */
    public function getDatetardinscrit(): \DateTime
    {
        return $this->datetardinscrit;
    }

    /**
     * @param \DateTime $datetardinscrit
     */
    public function setDatetardinscrit(\DateTime $datetardinscrit): void
    {
        $this->datetardinscrit = $datetardinscrit;
    }




}
