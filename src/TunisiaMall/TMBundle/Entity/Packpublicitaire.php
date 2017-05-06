<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Packpublicitaire
 *
 * @ORM\Table(name="packpublicitaire", indexes={@ORM\Index(name="idCatalogueGeneral", columns={"idCatalogueGeneral", "nomEnseigne"}), @ORM\Index(name="nomEnseigne", columns={"nomEnseigne"}), @ORM\Index(name="IDX_A7FA6BEFC7632824", columns={"idCatalogueGeneral"})})
 * @ORM\Entity
 */
class Packpublicitaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPackPublicatire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpackpublicatire;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \Enseigne
     *
     * @ORM\ManyToOne(targetEntity="Enseigne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nomEnseigne", referencedColumnName="nomEnseigne")
     * })
     */
    private $nomenseigne;

    /**
     * @var \Catalogue
     *
     * @ORM\ManyToOne(targetEntity="Catalogue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCatalogueGeneral", referencedColumnName="idCatalogue")
     * })
     */
    private $idcataloguegeneral;


}
