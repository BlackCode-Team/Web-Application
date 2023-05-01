<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Vehicule extends \App\Entity\Vehicule implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'idvehicule', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'status', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'modele', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'batterie', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'matricule', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'puissance', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'park'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'idvehicule', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'status', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'modele', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'batterie', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'matricule', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'puissance', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Vehicule' . "\0" . 'park'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Vehicule $proxy) {
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
    public function getModele(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModele', []);

        return parent::getModele();
    }

    /**
     * {@inheritDoc}
     */
    public function setModele(?string $modele): \App\Entity\Vehicule
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModele', [$modele]);

        return parent::setModele($modele);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(int $prix): \App\Entity\Vehicule
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getBatterie(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBatterie', []);

        return parent::getBatterie();
    }

    /**
     * {@inheritDoc}
     */
    public function setBatterie(?int $batterie): \App\Entity\Vehicule
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBatterie', [$batterie]);

        return parent::setBatterie($batterie);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatricule(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatricule', []);

        return parent::getMatricule();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatricule(?string $matricule): \App\Entity\Vehicule
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatricule', [$matricule]);

        return parent::setMatricule($matricule);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuissance(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuissance', []);

        return parent::getPuissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setPuissance(?int $puissance): \App\Entity\Vehicule
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPuissance', [$puissance]);

        return parent::setPuissance($puissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(?string $image): \App\Entity\Vehicule
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdvehicule(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdvehicule();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdvehicule', []);

        return parent::getIdvehicule();
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(string $status): \App\Entity\Vehicule
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\Vehicule
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getPark(): ?\App\Entity\Park
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPark', []);

        return parent::getPark();
    }

    /**
     * {@inheritDoc}
     */
    public function setPark(?\App\Entity\Park $park): \App\Entity\Vehicule
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPark', [$park]);

        return parent::setPark($park);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdpark(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdpark', []);

        return parent::getIdpark();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdpark(int $idpark): \App\Entity\Vehicule
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdpark', [$idpark]);

        return parent::setIdpark($idpark);
    }

}