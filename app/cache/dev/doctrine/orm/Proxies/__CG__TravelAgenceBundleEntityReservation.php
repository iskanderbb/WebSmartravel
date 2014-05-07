<?php

namespace Proxies\__CG__\Travel\AgenceBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Reservation extends \Travel\AgenceBundle\Entity\Reservation implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', 'id', 'dateReservation', 'payement', 'voyageurReservation', 'voyageReservation', 'factureReservation');
        }

        return array('__isInitialized__', 'id', 'dateReservation', 'payement', 'voyageurReservation', 'voyageReservation', 'factureReservation');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Reservation $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateReservation($dateReservation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateReservation', array($dateReservation));

        return parent::setDateReservation($dateReservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateReservation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateReservation', array());

        return parent::getDateReservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPayement($payement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPayement', array($payement));

        return parent::setPayement($payement);
    }

    /**
     * {@inheritDoc}
     */
    public function getPayement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPayement', array());

        return parent::getPayement();
    }

    /**
     * {@inheritDoc}
     */
    public function setVoyageurReservation(\Travel\AgenceBundle\Entity\Voyageur $voyageurReservation = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVoyageurReservation', array($voyageurReservation));

        return parent::setVoyageurReservation($voyageurReservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getVoyageurReservation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVoyageurReservation', array());

        return parent::getVoyageurReservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setVoyageReservation(\Travel\AgenceBundle\Entity\Voyage $voyageReservation = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVoyageReservation', array($voyageReservation));

        return parent::setVoyageReservation($voyageReservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getVoyageReservation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVoyageReservation', array());

        return parent::getVoyageReservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setFactureReservation(\Travel\AgenceBundle\Entity\Facture $factureReservation = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFactureReservation', array($factureReservation));

        return parent::setFactureReservation($factureReservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getFactureReservation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFactureReservation', array());

        return parent::getFactureReservation();
    }

}
