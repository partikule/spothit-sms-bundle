<?php

namespace Spothit\Bundle\SMSBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\HttpKernel\Kernel;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        if (Kernel::VERSION_ID >= 40200) {
            $treeBuilder = new TreeBuilder('spothit_sms');
        } else {
            $treeBuilder = new TreeBuilder();
        }

        $root = \method_exists($treeBuilder, 'getRootNode') ? $treeBuilder->getRootNode() : $treeBuilder->root('spothit_sms');

        $root->children()
            ->scalarNode('api_key')->isRequired()->cannotBeEmpty()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
