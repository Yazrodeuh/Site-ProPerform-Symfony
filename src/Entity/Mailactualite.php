<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mailactualite
 *
 * @ORM\Table(name="mailactualite")
 * @ORM\Entity
 */
class Mailactualite
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMailActu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmailactu;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=false)
     */
    private $mail;


}
