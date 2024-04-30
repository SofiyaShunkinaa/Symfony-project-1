<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'UxIcons'.\DIRECTORY_SEPARATOR.'IconifyConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class UxIconsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $iconDir;
    private $defaultIconAttributes;
    private $iconify;
    private $_usedProperties = [];

    /**
     * The local directory where icons are stored.
     * @default '%kernel.project_dir%/assets/icons'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function iconDir($value): static
    {
        $this->_usedProperties['iconDir'] = true;
        $this->iconDir = $value;

        return $this;
    }

    /**
     * Default attributes to add to all icons.
     * @default array (
      'fill' => 'currentColor',
    )
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function defaultIconAttributes(mixed $value = array (
      'fill' => 'currentColor',
    )): static
    {
        $this->_usedProperties['defaultIconAttributes'] = true;
        $this->defaultIconAttributes = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * Configuration for the "on demand" icons powered by Iconify.design.
     * @default {"enabled":false,"on_demand":true,"endpoint":"https:\/\/api.iconify.design"}
     * @return \Symfony\Config\UxIcons\IconifyConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\UxIcons\IconifyConfig : static)
     */
    public function iconify(array $value = []): \Symfony\Config\UxIcons\IconifyConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['iconify'] = true;
            $this->iconify = $value;

            return $this;
        }

        if (!$this->iconify instanceof \Symfony\Config\UxIcons\IconifyConfig) {
            $this->_usedProperties['iconify'] = true;
            $this->iconify = new \Symfony\Config\UxIcons\IconifyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "iconify()" has already been initialized. You cannot pass values the second time you call iconify().');
        }

        return $this->iconify;
    }

    public function getExtensionAlias(): string
    {
        return 'ux_icons';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('icon_dir', $value)) {
            $this->_usedProperties['iconDir'] = true;
            $this->iconDir = $value['icon_dir'];
            unset($value['icon_dir']);
        }

        if (array_key_exists('default_icon_attributes', $value)) {
            $this->_usedProperties['defaultIconAttributes'] = true;
            $this->defaultIconAttributes = $value['default_icon_attributes'];
            unset($value['default_icon_attributes']);
        }

        if (array_key_exists('iconify', $value)) {
            $this->_usedProperties['iconify'] = true;
            $this->iconify = \is_array($value['iconify']) ? new \Symfony\Config\UxIcons\IconifyConfig($value['iconify']) : $value['iconify'];
            unset($value['iconify']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['iconDir'])) {
            $output['icon_dir'] = $this->iconDir;
        }
        if (isset($this->_usedProperties['defaultIconAttributes'])) {
            $output['default_icon_attributes'] = $this->defaultIconAttributes;
        }
        if (isset($this->_usedProperties['iconify'])) {
            $output['iconify'] = $this->iconify instanceof \Symfony\Config\UxIcons\IconifyConfig ? $this->iconify->toArray() : $this->iconify;
        }

        return $output;
    }

}
