<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profileenseigne
 *
 * @ORM\Table(name="profileenseigne", indexes={@ORM\Index(name="IDX_9022486F4F65FF6D", columns={"nomEnseigne"})})
 * @ORM\Entity
 */
class Profileenseigne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="url", type="integer", nullable=false)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="info", type="integer", nullable=true)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEnseigne", type="string", length=40, nullable=true)
     */
    private $nomenseigne;


}
