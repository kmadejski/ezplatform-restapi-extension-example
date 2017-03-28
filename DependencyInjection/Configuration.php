<?php

namespace EzSystems\RESTAPIExtensionExampleBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package EzSystems\RESTAPIExtensionExampleBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ez_systems_restapi_extension_example');
        return $treeBuilder;
    }
}
