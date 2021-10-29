<?php

namespace App\Entity;

use App\Repository\NewsLetterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NewsLetterRepository::class)
 */
class NewsLetter
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=150, unique=true)
     */
    private string $mail;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private bool $formationsNews;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private bool $immoNews;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private bool $debitBoissonNews;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private bool $entrepriseNews;


    public function getId(): int
    {
        return $this->id;
    }

    public function getMail(): string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * @return bool
     */
    public function isFormationsNews(): bool
    {
        return $this->formationsNews;
    }

    /**
     * @param bool $formationsNews
     */
    public function setFormationsNews(bool $formationsNews): void
    {
        $this->formationsNews = $formationsNews;
    }

    /**
     * @return bool
     */
    public function isImmoNews(): bool
    {
        return $this->immoNews;
    }

    /**
     * @param bool $immoNews
     */
    public function setImmoNews(bool $immoNews): void
    {
        $this->immoNews = $immoNews;
    }

    /**
     * @return bool
     */
    public function isDebitBoissonNews(): bool
    {
        return $this->debitBoissonNews;
    }

    /**
     * @param bool $debitBoissonNews
     */
    public function setDebitBoissonNews(bool $debitBoissonNews): void
    {
        $this->debitBoissonNews = $debitBoissonNews;
    }

    /**
     * @return bool
     */
    public function isEntrepriseNews(): bool
    {
        return $this->entrepriseNews;
    }

    /**
     * @param bool $entrepriseNews
     */
    public function setEntrepriseNews(bool $entrepriseNews): void
    {
        $this->entrepriseNews = $entrepriseNews;
    }


}
