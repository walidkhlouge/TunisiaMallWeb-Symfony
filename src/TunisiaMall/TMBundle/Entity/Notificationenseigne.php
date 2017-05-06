<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notificationenseigne
 *
 * @ORM\Table(name="notificationenseigne")
 * @ORM\Entity
 */
class Notificationenseigne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idNotificationE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnotificatione;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=100, nullable=false)
     */
    private $lien;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=200, nullable=false)
     */
    private $intitule;


}
