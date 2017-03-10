<?php
/**
 * File containing the BcLowerCaseUrlAliasExtension class part of the BcLowerCaseUrlAliasBundle package.
 *
 * @copyright Copyright (C) Brookins Consulting. All rights reserved.
 * @license For full copyright and license information view LICENSE and COPYRIGHT.md file distributed with this source code.
 * @version //autogentag//
 * @package BcLowerCaseUrlAliasBundle
 */

namespace BrookinsConsulting\BcLowerCaseUrlAliasBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Resource\FileResource;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\Yaml\Yaml;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class BcLowerCaseUrlAliasExtension extends Extension implements PrependExtensionInterface
{
    /**
     * Allow an extension to load the bundle configurations.
     * Here we will load our bundle settings.
     *
     * @param Array $configs
     * @param ContainerBuilder $container
     */
    public function load( array $configs, ContainerBuilder $container )
    {
        // param $configs (for BC) has always been an empty array so we do this only to silence ezcs warnings for not used constructor variable
        $notUsed = $configs;

        $loader = new Loader\YamlFileLoader(
            $container,
            new FileLocator( __DIR__ . '/../Resources/config' )
        );

        $loader->load( 'storage_engines_common.yml' );
    }

    /**
     * Allow an extension to prepend the extension configurations.
     * Here we will load our template selection rules.
     *
     * @param ContainerBuilder $container
     */
    public function prepend( ContainerBuilder $container )
    {
    }

    /**
     * Returns extension alias
     *
     * @return string
     */
    public function getAlias()
    {
        return 'bc_lower_case_url_alias';
    }
}
