<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaireproduit
 *
 * @ORM\Table(name="commentaireproduit", indexes={@ORM\Index(name="produit", columns={"idProduit"}), @ORM\Index(name="client", columns={"client"})})
 * @ORM\Entity
 */
class Commentaireproduit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommentaireProd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommentaireprod;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=false)
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
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduit", referencedColumnName="idProduit")
     * })
     */
    private $idproduit;


}
