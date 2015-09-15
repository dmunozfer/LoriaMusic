<?php

namespace Proxies\__CG__\ByExample\DemoBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Video extends \ByExample\DemoBundle\Entity\Video implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setQualite($qualite)
    {
        $this->__load();
        return parent::setQualite($qualite);
    }

    public function getQualite()
    {
        $this->__load();
        return parent::getQualite();
    }

    public function addIdlangue(\ByExample\DemoBundle\Entity\Langue $idlangue)
    {
        $this->__load();
        return parent::addIdlangue($idlangue);
    }

    public function removeIdlangue(\ByExample\DemoBundle\Entity\Langue $idlangue)
    {
        $this->__load();
        return parent::removeIdlangue($idlangue);
    }

    public function getIdlangue()
    {
        $this->__load();
        return parent::getIdlangue();
    }

    public function setIditem(\ByExample\DemoBundle\Entity\Item $iditem)
    {
        $this->__load();
        return parent::setIditem($iditem);
    }

    public function getIditem()
    {
        $this->__load();
        return parent::getIditem();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'description', 'qualite', 'idlangue', 'iditem');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}