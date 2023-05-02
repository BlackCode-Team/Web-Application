<?php

namespace Symfony\Config\OneupUploader;

require_once __DIR__.\DIRECTORY_SEPARATOR.'MappingsConfig'.\DIRECTORY_SEPARATOR.'CustomFrontendConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MappingsConfig'.\DIRECTORY_SEPARATOR.'StorageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MappingsConfig'.\DIRECTORY_SEPARATOR.'EndpointsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MappingsConfig 
{
    private $frontend;
    private $customFrontend;
    private $storage;
    private $routePrefix;
    private $endpoints;
    private $allowedMimetypes;
    private $disallowedMimetypes;
    private $errorHandler;
    private $maxSize;
    private $useOrphanage;
    private $enableProgress;
    private $enableCancelation;
    private $namer;
    private $rootFolder;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|'fineuploader'|'blueimp'|'uploadify'|'yui3'|'fancyupload'|'mooupload'|'plupload'|'dropzone'|'custom' $value
     * @return $this
     */
    public function frontend($value): self
    {
        $this->_usedProperties['frontend'] = true;
        $this->frontend = $value;
    
        return $this;
    }
    
    public function customFrontend(array $value = []): \Symfony\Config\OneupUploader\MappingsConfig\CustomFrontendConfig
    {
        if (null === $this->customFrontend) {
            $this->_usedProperties['customFrontend'] = true;
            $this->customFrontend = new \Symfony\Config\OneupUploader\MappingsConfig\CustomFrontendConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customFrontend()" has already been initialized. You cannot pass values the second time you call customFrontend().');
        }
    
        return $this->customFrontend;
    }
    
    public function storage(array $value = []): \Symfony\Config\OneupUploader\MappingsConfig\StorageConfig
    {
        if (null === $this->storage) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\OneupUploader\MappingsConfig\StorageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "storage()" has already been initialized. You cannot pass values the second time you call storage().');
        }
    
        return $this->storage;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function routePrefix($value): self
    {
        $this->_usedProperties['routePrefix'] = true;
        $this->routePrefix = $value;
    
        return $this;
    }
    
    /**
     * @return \Symfony\Config\OneupUploader\MappingsConfig\EndpointsConfig|$this
     */
    public function endpoints($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['endpoints'] = true;
            $this->endpoints = $value;
    
            return $this;
        }
    
        if (!$this->endpoints instanceof \Symfony\Config\OneupUploader\MappingsConfig\EndpointsConfig) {
            $this->_usedProperties['endpoints'] = true;
            $this->endpoints = new \Symfony\Config\OneupUploader\MappingsConfig\EndpointsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "endpoints()" has already been initialized. You cannot pass values the second time you call endpoints().');
        }
    
        return $this->endpoints;
    }
    
    /**
     * @param ParamConfigurator|array $value
     * @return $this
     */
    public function allowedMimetypes(string $type, $value): self
    {
        $this->_usedProperties['allowedMimetypes'] = true;
        $this->allowedMimetypes[$type] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function disallowedMimetypes($value): self
    {
        $this->_usedProperties['disallowedMimetypes'] = true;
        $this->disallowedMimetypes = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function errorHandler($value): self
    {
        $this->_usedProperties['errorHandler'] = true;
        $this->errorHandler = $value;
    
        return $this;
    }
    
    /**
     * Set max_size to -1 for gracefully downgrade this number to the systems max upload size.
     * @default 9223372036854775807
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxSize($value): self
    {
        $this->_usedProperties['maxSize'] = true;
        $this->maxSize = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useOrphanage($value): self
    {
        $this->_usedProperties['useOrphanage'] = true;
        $this->useOrphanage = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableProgress($value): self
    {
        $this->_usedProperties['enableProgress'] = true;
        $this->enableProgress = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableCancelation($value): self
    {
        $this->_usedProperties['enableCancelation'] = true;
        $this->enableCancelation = $value;
    
        return $this;
    }
    
    /**
     * @default 'oneup_uploader.namer.uniqid'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function namer($value): self
    {
        $this->_usedProperties['namer'] = true;
        $this->namer = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function rootFolder($value): self
    {
        $this->_usedProperties['rootFolder'] = true;
        $this->rootFolder = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('frontend', $value)) {
            $this->_usedProperties['frontend'] = true;
            $this->frontend = $value['frontend'];
            unset($value['frontend']);
        }
    
        if (array_key_exists('custom_frontend', $value)) {
            $this->_usedProperties['customFrontend'] = true;
            $this->customFrontend = new \Symfony\Config\OneupUploader\MappingsConfig\CustomFrontendConfig($value['custom_frontend']);
            unset($value['custom_frontend']);
        }
    
        if (array_key_exists('storage', $value)) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\OneupUploader\MappingsConfig\StorageConfig($value['storage']);
            unset($value['storage']);
        }
    
        if (array_key_exists('route_prefix', $value)) {
            $this->_usedProperties['routePrefix'] = true;
            $this->routePrefix = $value['route_prefix'];
            unset($value['route_prefix']);
        }
    
        if (array_key_exists('endpoints', $value)) {
            $this->_usedProperties['endpoints'] = true;
            $this->endpoints = \is_array($value['endpoints']) ? new \Symfony\Config\OneupUploader\MappingsConfig\EndpointsConfig($value['endpoints']) : $value['endpoints'];
            unset($value['endpoints']);
        }
    
        if (array_key_exists('allowed_mimetypes', $value)) {
            $this->_usedProperties['allowedMimetypes'] = true;
            $this->allowedMimetypes = $value['allowed_mimetypes'];
            unset($value['allowed_mimetypes']);
        }
    
        if (array_key_exists('disallowed_mimetypes', $value)) {
            $this->_usedProperties['disallowedMimetypes'] = true;
            $this->disallowedMimetypes = $value['disallowed_mimetypes'];
            unset($value['disallowed_mimetypes']);
        }
    
        if (array_key_exists('error_handler', $value)) {
            $this->_usedProperties['errorHandler'] = true;
            $this->errorHandler = $value['error_handler'];
            unset($value['error_handler']);
        }
    
        if (array_key_exists('max_size', $value)) {
            $this->_usedProperties['maxSize'] = true;
            $this->maxSize = $value['max_size'];
            unset($value['max_size']);
        }
    
        if (array_key_exists('use_orphanage', $value)) {
            $this->_usedProperties['useOrphanage'] = true;
            $this->useOrphanage = $value['use_orphanage'];
            unset($value['use_orphanage']);
        }
    
        if (array_key_exists('enable_progress', $value)) {
            $this->_usedProperties['enableProgress'] = true;
            $this->enableProgress = $value['enable_progress'];
            unset($value['enable_progress']);
        }
    
        if (array_key_exists('enable_cancelation', $value)) {
            $this->_usedProperties['enableCancelation'] = true;
            $this->enableCancelation = $value['enable_cancelation'];
            unset($value['enable_cancelation']);
        }
    
        if (array_key_exists('namer', $value)) {
            $this->_usedProperties['namer'] = true;
            $this->namer = $value['namer'];
            unset($value['namer']);
        }
    
        if (array_key_exists('root_folder', $value)) {
            $this->_usedProperties['rootFolder'] = true;
            $this->rootFolder = $value['root_folder'];
            unset($value['root_folder']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['frontend'])) {
            $output['frontend'] = $this->frontend;
        }
        if (isset($this->_usedProperties['customFrontend'])) {
            $output['custom_frontend'] = $this->customFrontend->toArray();
        }
        if (isset($this->_usedProperties['storage'])) {
            $output['storage'] = $this->storage->toArray();
        }
        if (isset($this->_usedProperties['routePrefix'])) {
            $output['route_prefix'] = $this->routePrefix;
        }
        if (isset($this->_usedProperties['endpoints'])) {
            $output['endpoints'] = $this->endpoints instanceof \Symfony\Config\OneupUploader\MappingsConfig\EndpointsConfig ? $this->endpoints->toArray() : $this->endpoints;
        }
        if (isset($this->_usedProperties['allowedMimetypes'])) {
            $output['allowed_mimetypes'] = $this->allowedMimetypes;
        }
        if (isset($this->_usedProperties['disallowedMimetypes'])) {
            $output['disallowed_mimetypes'] = $this->disallowedMimetypes;
        }
        if (isset($this->_usedProperties['errorHandler'])) {
            $output['error_handler'] = $this->errorHandler;
        }
        if (isset($this->_usedProperties['maxSize'])) {
            $output['max_size'] = $this->maxSize;
        }
        if (isset($this->_usedProperties['useOrphanage'])) {
            $output['use_orphanage'] = $this->useOrphanage;
        }
        if (isset($this->_usedProperties['enableProgress'])) {
            $output['enable_progress'] = $this->enableProgress;
        }
        if (isset($this->_usedProperties['enableCancelation'])) {
            $output['enable_cancelation'] = $this->enableCancelation;
        }
        if (isset($this->_usedProperties['namer'])) {
            $output['namer'] = $this->namer;
        }
        if (isset($this->_usedProperties['rootFolder'])) {
            $output['root_folder'] = $this->rootFolder;
        }
    
        return $output;
    }

}
