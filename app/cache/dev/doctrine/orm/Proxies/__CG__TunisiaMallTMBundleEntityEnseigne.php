<?php

namespace Proxies\__CG__\TunisiaMall\TMBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Enseigne extends \TunisiaMall\TMBundle\Entity\Enseigne implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Enseigne' . "\0" . 'nomenseigne', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Enseigne' . "\0" . 'adresse', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Enseigne' . "\0" . 'url', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Enseigne' . "\0" . 'info', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Enseigne' . "\0" . 'idpack', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Enseigne' . "\0" . 'loginresponsableenseigne', 'file'];
        }

        return ['__isInitialized__', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Enseigne' . "\0" . 'nomenseigne', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Enseigne' . "\0" . 'adresse', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Enseigne' . "\0" . 'url', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Enseigne' . "\0" . 'info', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Enseigne' . "\0" . 'idpack', '' . "\0" . 'TunisiaMall\\TMBundle\\Entity\\Enseigne' . "\0" . 'loginresponsableenseigne', 'file'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Enseigne $proxy) {
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginresponsableenseigne($loginresponsableenseigne)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginresponsableenseigne', [$loginresponsableenseigne]);

        return parent::setLoginresponsableenseigne($loginresponsableenseigne);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', []);

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function uploadProfilePicture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'uploadProfilePicture', []);

        return parent::uploadProfilePicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomenseigne($nomenseigne)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomenseigne', [$nomenseigne]);

        return parent::setNomenseigne($nomenseigne);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomenseigne()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getNomenseigne();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomenseigne', []);

        return parent::getNomenseigne();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', [$url]);

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', []);

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setInfo($info)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInfo', [$info]);

        return parent::setInfo($info);
    }

    /**
     * {@inheritDoc}
     */
    public function getInfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfo', []);

        return parent::getInfo();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdpack($idpack)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdpack', [$idpack]);

        return parent::setIdpack($idpack);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdpack()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdpack', []);

        return parent::getIdpack();
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginresponsableenseigne()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginresponsableenseigne', []);

        return parent::getLoginresponsableenseigne();
    }

}
