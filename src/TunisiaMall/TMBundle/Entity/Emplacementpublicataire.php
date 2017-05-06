<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emplacementpublicataire
 *
 * @ORM\Table(name="emplacementpublicataire", indexes={@ORM\Index(name="idPackPublicataire", columns={"idPackPublicataire"})})
 * @ORM\Entity
 */
class Emplacementpublicataire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEmplacementPublicitaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idemplacementpublicitaire;

    /**
     * @var \Packpublicitaire
     *
     * @ORM\ManyToOne(targetEntity="Packpublicitaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPackPublicataire", referencedColumnName="idPackPublicatire")
     * })
     */
    private $idpackpublicataire;


}
