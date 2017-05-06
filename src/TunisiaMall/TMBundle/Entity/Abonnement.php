<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="abonnement", indexes={@ORM\Index(name="nomEnseigneAbonnement", columns={"nomEnseigne"})})
 * @ORM\Entity
 */
class Abonnement
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $login;

    /**
     * @var \Enseigne
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Enseigne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nomEnseigne", referencedColumnName="nomEnseigne")
     * })
     */
    private $nomenseigne;


}
