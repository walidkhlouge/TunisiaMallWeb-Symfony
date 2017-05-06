<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamationens
 *
 * @ORM\Table(name="reclamationens", indexes={@ORM\Index(name="client", columns={"client", "enseigne"}), @ORM\Index(name="enseigne", columns={"enseigne"}), @ORM\Index(name="IDX_C805D19FC7440455", columns={"client"})})
 * @ORM\Entity
 */
class Reclamationens
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="reclamation", type="text", nullable=false)
     */
    private $reclamation;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client", referencedColumnName="login")
     * })
     */
    private $client;

    /**
     * @var \Enseigne
     *
     * @ORM\ManyToOne(targetEntity="Enseigne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enseigne", referencedColumnName="nomEnseigne")
     * })
     */
    private $enseigne;


}
