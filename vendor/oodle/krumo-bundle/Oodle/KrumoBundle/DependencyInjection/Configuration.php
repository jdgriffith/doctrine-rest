<?php

namespace Oodle\KrumoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('oodle_krumo')
            ->children()
                ->arrayNode('skin')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('selected')->defaultValue('schabalon.com')->end()
                    ->end()
                ->end()

                ->arrayNode('css')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('url')->defaultValue('/krumo/')->end()
                    ->end()
                ->end()
        
                ->arrayNode('display')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('show_version')->defaultValue(true)->end()
                        ->scalarNode('show_call_info')->defaultValue(true)->end()
                        ->arrayNode('cascade')->prototype('scalar')->end()
                    ->end()
                ->end()
            ->end();
        return $treeBuilder;
    }
}
