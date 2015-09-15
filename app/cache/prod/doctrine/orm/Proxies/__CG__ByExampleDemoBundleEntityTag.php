<?php

namespace Proxies\__CG__\ByExample\DemoBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Tag extends \ByExample\DemoBundle\Entity\Tag implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setLibelle($libelle)
    {
        $this->__load();
        return parent::setLibelle($libelle);
    }

    public function getLibelle()
    {
        $this->__load();
        return parent::getLibelle();
    }

    public function addIditem(\ByExample\DemoBundle\Entity\Item $iditem)
    {
        $this->__load();
        return parent::addIditem($iditem);
    }

    public function removeIditem(\ByExample\DemoBundle\Entity\Item $iditem)
    {
        $this->__load();
        return parent::removeIditem($iditem);
    }

    public function getIditem()
    {
        $this->__load();
        return parent::getIditem();
    }

    public function addIdartiste(\ByExample\DemoBundle\Entity\Artiste $idartiste)
    {
        $this->__load();
        return parent::addIdartiste($idartiste);
    }

    public function removeIdartiste(\ByExample\DemoBundle\Entity\Artiste $idartiste)
    {
        $this->__load();
        return parent::removeIdartiste($idartiste);
    }

    public function getIdartiste()
    {
        $this->__load();
        return parent::getIdartiste();
    }

    public function addIdplaylist(\ByExample\DemoBundle\Entity\Playlist $idplaylist)
    {
        $this->__load();
        return parent::addIdplaylist($idplaylist);
    }

    public function removeIdplaylist(\ByExample\DemoBundle\Entity\Playlist $idplaylist)
    {
        $this->__load();
        return parent::removeIdplaylist($idplaylist);
    }

    public function getIdplaylist()
    {
        $this->__load();
        return parent::getIdplaylist();
    }

    public function addIdsession(\ByExample\DemoBundle\Entity\Session $idsession)
    {
        $this->__load();
        return parent::addIdsession($idsession);
    }

    public function removeIdsession(\ByExample\DemoBundle\Entity\Session $idsession)
    {
        $this->__load();
        return parent::removeIdsession($idsession);
    }

    public function getIdsession()
    {
        $this->__load();
        return parent::getIdsession();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'libelle', 'idartiste', 'idnotetagitem', 'idplaylist', 'idsession');
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