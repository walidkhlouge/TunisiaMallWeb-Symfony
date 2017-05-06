<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaireens
 *
 * @ORM\Table(name="commentaireens", indexes={@ORM\Index(name="idEnseigne", columns={"enseigne"}), @ORM\Index(name="idClient", columns={"client"})})
 * @ORM\Entity
 */
class Commentaireens
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="text", nullable=false)
     */
    private $commentaire;

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
