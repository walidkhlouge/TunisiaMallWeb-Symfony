<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamationmall
 *
 * @ORM\Table(name="reclamationmall", indexes={@ORM\Index(name="client", columns={"client"})})
 * @ORM\Entity
 */
class Reclamationmall
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReclamationMall", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreclamationmall;

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
     * Get idreclamationmall
     *
     * @return integer 
     */
    public function getIdreclamationmall()
    {
        return $this->idreclamationmall;
    }

    /**
     * Set reclamation
     *
     * @param string $reclamation
     * @return Reclamationmall
     */
    public function setReclamation($reclamation)
    {
        $this->reclamation = $reclamation;

        return $this;
    }

    /**
     * Get reclamation
     *
     * @return string 
     */
    public function getReclamation()
    {
        return $this->reclamation;
    }

    /**
     * Set client
     *
     * @param \TunisiaMall\TMBundle\Entity\Compte $client
     * @return Reclamationmall
     */
    public function setClient(\TunisiaMall\TMBundle\Entity\Compte $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \TunisiaMall\TMBundle\Entity\Compte 
     */
    public function getClient()
    {
        return $this->client;
    }
}
