<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Reclamation extends \App\Entity\Reclamation implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'idreclamation', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'objet', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'contenu', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'utilisateur', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'vehicule'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'idreclamation', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'objet', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'contenu', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'utilisateur', '' . "\0" . 'App\\Entity\\Reclamation' . "\0" . 'vehicule'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Reclamation $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdreclamation(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdreclamation();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdreclamation', []);

        return parent::getIdreclamation();
    }

    /**
     * {@inheritDoc}
     */
    public function getObjet(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjet', []);

        return parent::getObjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjet(string $objet): \App\Entity\Reclamation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjet', [$objet]);

        return parent::setObjet($objet);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenu(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenu', []);

        return parent::getContenu();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenu(string $contenu): \App\Entity\Reclamation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenu', [$contenu]);

        return parent::setContenu($contenu);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(\DateTimeInterface $date): \App\Entity\Reclamation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut(?string $statut): \App\Entity\Reclamation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getIduser(): ?\App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIduser', []);

        return parent::getIduser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIduser(?\App\Entity\Utilisateur $iduser): \App\Entity\Reclamation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIduser', [$iduser]);

        return parent::setIduser($iduser);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdvehicule(): ?\App\Entity\Vehicule
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdvehicule', []);

        return parent::getIdvehicule();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdvehicule(?\App\Entity\Vehicule $idvehicule): \App\Entity\Reclamation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdvehicule', [$idvehicule]);

        return parent::setIdvehicule($idvehicule);
    }

    /**
     * {@inheritDoc}
     */
    public function getVehicule(): ?\App\Entity\Vehicule
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVehicule', []);

        return parent::getVehicule();
    }

    /**
     * {@inheritDoc}
     */
    public function setVehicule(?\App\Entity\Vehicule $vehicule): \App\Entity\Reclamation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVehicule', [$vehicule]);

        return parent::setVehicule($vehicule);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtilisateur(): ?\App\Entity\Utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtilisateur', []);

        return parent::getUtilisateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtilisateur(?\App\Entity\Utilisateur $utilisateur): \App\Entity\Reclamation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtilisateur', [$utilisateur]);

        return parent::setUtilisateur($utilisateur);
    }

}
