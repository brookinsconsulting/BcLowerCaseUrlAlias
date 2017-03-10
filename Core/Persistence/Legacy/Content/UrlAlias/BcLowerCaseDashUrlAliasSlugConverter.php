<?php
/**
 * File containing the BcLowerCaseDashUrlAliasSlugConverter class part of the BcLowerCaseUrlAliasBundle package.
 *
 * @copyright Copyright (C) Brookins Consulting. All rights reserved.
 * @license For full copyright and license information view LICENSE and COPYRIGHT.md file distributed with this source code.
 * @version //autogentag//
 * @package BcLowerCaseUrlAliasBundle
 */

namespace BrookinsConsulting\BcLowerCaseUrlAliasBundle\Core\Persistence\Legacy\Content\UrlAlias;

use eZ\Publish\Core\Persistence\Legacy\Content\UrlAlias\SlugConverter;
use eZ\Publish\Core\Persistence\TransformationProcessor;

class BcLowerCaseDashUrlAliasSlugConverter extends SlugConverter {

    /**
     * Creates a new URL slug converter.
     *
     * @param \eZ\Publish\Core\Persistence\TransformationProcessor $transformationProcessor
     * @param array $configuration
     */
    public function __construct(TransformationProcessor $transformationProcessor, array $configuration = array())
    {
        $this->configuration['transformationGroups']['urlalias']['commands'] =
            array_merge($this->configuration['transformationGroups']['urlalias']['commands'], array(
                'ascii_lowercase',
                'cyrillic_lowercase',
                'greek_lowercase',
                'latin1_lowercase',
                'latin-exta_lowercase',
                'latin_lowercase',
            )
        );

        $this->configuration['wordSeparatorName'] = 'dash';

        parent::__construct($transformationProcessor, $configuration);
    }

}

?>