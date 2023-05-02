<?php

namespace Symfony\Config\OneupUploader\MappingsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StorageConfig 
{
    private $service;
    private $type;
    private $filesystem;
    private $directory;
    private $streamWrapper;
    private $syncBufferSize;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): self
    {
        $this->_usedProperties['service'] = true;
        $this->service = $value;
    
        return $this;
    }
    
    /**
     * @default 'filesystem'
     * @param ParamConfigurator|'filesystem'|'gaufrette'|'flysystem' $value
     * @return $this
     */
    public function type($value): self
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filesystem($value): self
    {
        $this->_usedProperties['filesystem'] = true;
        $this->filesystem = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function directory($value): self
    {
        $this->_usedProperties['directory'] = true;
        $this->directory = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function streamWrapper($value): self
    {
        $this->_usedProperties['streamWrapper'] = true;
        $this->streamWrapper = $value;
    
        return $this;
    }
    
    /**
     * @default '100K'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function syncBufferSize($value): self
    {
        $this->_usedProperties['syncBufferSize'] = true;
        $this->syncBufferSize = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('service', $value)) {
            $this->_usedProperties['service'] = true;
            $this->service = $value['service'];
            unset($value['service']);
        }
    
        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }
    
        if (array_key_exists('filesystem', $value)) {
            $this->_usedProperties['filesystem'] = true;
            $this->filesystem = $value['filesystem'];
            unset($value['filesystem']);
        }
    
        if (array_key_exists('directory', $value)) {
            $this->_usedProperties['directory'] = true;
            $this->directory = $value['directory'];
            unset($value['directory']);
        }
    
        if (array_key_exists('stream_wrapper', $value)) {
            $this->_usedProperties['streamWrapper'] = true;
            $this->streamWrapper = $value['stream_wrapper'];
            unset($value['stream_wrapper']);
        }
    
        if (array_key_exists('sync_buffer_size', $value)) {
            $this->_usedProperties['syncBufferSize'] = true;
            $this->syncBufferSize = $value['sync_buffer_size'];
            unset($value['sync_buffer_size']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['service'])) {
            $output['service'] = $this->service;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['filesystem'])) {
            $output['filesystem'] = $this->filesystem;
        }
        if (isset($this->_usedProperties['directory'])) {
            $output['directory'] = $this->directory;
        }
        if (isset($this->_usedProperties['streamWrapper'])) {
            $output['stream_wrapper'] = $this->streamWrapper;
        }
        if (isset($this->_usedProperties['syncBufferSize'])) {
            $output['sync_buffer_size'] = $this->syncBufferSize;
        }
    
        return $output;
    }

}
