<?php

namespace Proxies\__CG__\TunisiaMall\TMBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Commande extends \TunisiaMall\TMBundle\Entity\Commande implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'idcommande', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'adresselivraison', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'quantite', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'taille', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'timelivraison', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'idproduit', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'loginclient'];
        }

        return ['__isInitialized__', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'idcommande', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'adresselivraison', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'quantite', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'taille', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'timelivraison', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'idproduit', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Commande' . "\0" . 'loginclient'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Commande $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdcommande()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdcommande();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcommande', []);

        return parent::getIdcommande();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresselivraison()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresselivraison', []);

        return parent::getAdresselivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantite', []);

        return parent::getQuantite();
    }

    /**
     * {@inheritDoc}
     */
    public function getTaille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaille', []);

        return parent::getTaille();
    }

    /**
     * {@inheritDoc}
     */
    public function getTimelivraison()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimelivraison', []);

        return parent::getTimelivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdproduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdproduit', []);

        return parent::getIdproduit();
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginclient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginclient', []);

        return parent::getLoginclient();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdcommande($idcommande)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdcommande', [$idcommande]);

        return parent::setIdcommande($idcommande);
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresselivraison($adresselivraison)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresselivraison', [$adresselivraison]);

        return parent::setAdresselivraison($adresselivraison);
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantite($quantite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantite', [$quantite]);

        return parent::setQuantite($quantite);
    }

    /**
     * {@inheritDoc}
     */
    public function setTaille($taille)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaille', [$taille]);

        return parent::setTaille($taille);
    }

    /**
     * {@inheritDoc}
     */
    public function setTimelivraison($timelivraison)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimelivraison', [$timelivraison]);

        return parent::setTimelivraison($timelivraison);
    }

    /**
     * {@inheritDoc}
     */
    public function setIdproduit($idproduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdproduit', [$idproduit]);

        return parent::setIdproduit($idproduit);
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginclient($loginclient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginclient', [$loginclient]);

        return parent::setLoginclient($loginclient);
    }

}
