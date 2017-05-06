<?php

namespace TunisiaMall\TMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarteFidelite
 *
 * @ORM\Table(name="carte_fidelite", indexes={@ORM\Index(name="idEnseigne", columns={"nomEnseigne", "loginClient"}), @ORM\Index(name="loginClient", columns={"loginClient"}), @ORM\Index(name="nomEnseigne", columns={"nomEnseigne"})})
 * @ORM\Entity
 */
class CarteFidelite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCarteFidelite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcartefidelite;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointFidele", type="integer", nullable=true)
     */
    private $pointfidele;

    /**
     * @var float
     *
     * @ORM\Column(name="reductionFixe", type="float", precision=10, scale=0, nullable=true)
     */
    private $reductionfixe;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointFideleFixe", type="integer", nullable=true)
     */
    private $pointfidelefixe;

    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loginClient", referencedColumnName="login")
     * })
     */
    private $loginclient;

    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Enseigne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nomEnseigne", referencedColumnName="nomEnseigne")
     * })
     */
    private $nomenseigne;

    function getIdcartefidelite() {
        return $this->idcartefidelite;
    }

    function getPointfidele() {
        return $this->pointfidele;
    }

    function getReductionfixe() {
        return $this->reductionfixe;
    }

    function getPointfidelefixe() {
        return $this->pointfidelefixe;
    }

    function getLoginclient() {
        return $this->loginclient;
    }

    function getNomenseigne() {
        return $this->nomenseigne;
    }

    function setIdcartefidelite($idcartefidelite) {
        $this->idcartefidelite = $idcartefidelite;
    }

    function setPointfidele($pointfidele) {
        $this->pointfidele = $pointfidele;
    }

    function setReductionfixe($reductionfixe) {
        $this->reductionfixe = $reductionfixe;
    }

    function setPointfidelefixe($pointfidelefixe) {
        $this->pointfidelefixe = $pointfidelefixe;
    }

    function setLoginclient($loginclient) {
        $this->loginclient = $loginclient;
    }

    function setNomenseigne($nomenseigne) {
        $this->nomenseigne = $nomenseigne;
    }


}
