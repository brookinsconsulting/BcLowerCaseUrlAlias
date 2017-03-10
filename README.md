BC Lower Case Url Alias
===============

This bundle implements a solution to provide eZ Publish Platform / eZ Platform url alias
transformation configuration necessary to transform new content created or modified
url aliases to lower case separated by underscore or dash characters.


Version
=======

* The current version of BC Lower Case Url Alias is 0.1.2

* Last Major update: March 09, 2017


Copyright
=========

* BC Lower Case Url Alias is copyright 1999 - 2017 Brookins Consulting

* See: [COPYRIGHT.md](COPYRIGHT.md) for more information on the terms of the copyright and license


License
=======

BC Lower Case Url Alias is licensed under the GNU General Public License.

The complete license agreement is included in the [LICENSE](LICENSE.md) file.

BC Lower Case Url Alias is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License or at your
option a later version.

BC Lower Case Url Alias is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

The GNU GPL gives you the right to use, modify and redistribute
BC Lower Case Url Alias under certain conditions. The GNU GPL license
is distributed with the software, see the file [LICENSE](LICENSE.md).

It is also available at [http://www.gnu.org/licenses/gpl.txt](http://www.gnu.org/licenses/gpl.txt)

You should have received a copy of the GNU General Public License
along with BC Lower Case Url Alias in in the [LICENSE](LICENSE.md) file.

If not, see [http://www.gnu.org/licenses/](http://www.gnu.org/licenses/).

Using BC Lower Case Url Alias under the terms of the GNU GPL is free (as in freedom).

For more information or questions please contact: license@brookinsconsulting.com


Requirements
============

The following requirements exists for using BC Lower Case Url Alias bundle:


### eZ Publish version

* Make sure you use eZ Publish version 5.x (required) or higher.

* Designed and tested with eZ Publish Platform (With Legacy) 2015.01.03 and PHP 5.6.30+


### PHP version

* Make sure you have PHP 5.x or higher.


Features
========

### SlugConverter Classes

This solution provides the following ezplatform slug converter classes:

* BrookinsConsulting\BcLowerCaseUrlAliasBundle\Core\Persistence\Legacy\Content\UrlAlias\BcLowerCaseUnderscoreUrlAliasSlugConverter
* BrookinsConsulting\BcLowerCaseUrlAliasBundle\Core\Persistence\Legacy\Content\UrlAlias\BcLowerCaseDashUrlAliasSlugConverter

### Dependencies

* This solution depends on eZ Platform
* This solution depends on symfony/symfony

These dependencies are documented in greater detail within the bundle's composer.json file


Use case
========

This solution was created to provide content url aliases which are similar
to the eZ Publish Legacy 3.x url aliases (lowercase and separated by underscores).


Installation
============

### Bundle Installation via Composer

Run the following command from your project root to install the bundle:

    bash$ composer require brookinsconsulting/bclowercaseurlaliasbundle dev-master;


### Bundle Activation

Within file `app/AppKernel.php` method `registerBundles` add the following into the `$bundles = array(` variable definition.

    // Brookins Consulting : BcGitHubStarsBundle Requirements
    new BrookinsConsulting\BcLowerCaseUrlAliasBundle\BcLowerCaseUrlAliasBundle(),


### Clear the caches

Clear Symfony caches (Required).

    php bin/console cache:clear;


Usage
=====

The solution is configured to work virtually by default once properly installed.

### Warning


#### Remember to backup your installations database, source code and var directory content before using this solution!
#### Remember much like legacy implementations this solution should be used before content is created from a clean installation.
#### Otherwise you may need to re-publish all content objects upon installation via script or manually in order to ensure all content objects use the same url alias transformation convention.
#### eZ Publish Platform Legacy installations / siteaccesses may also very likely need the corresponding url alias transformation convention which can be achieved via ini settings.

### Alternate Configuration (Optional)

If you prefer the lower case urls separated with underscores you need do nothing as this is the supported default once this bundle is activated.

If however you prefer the lower case urls separated with dashes (an optional configuration) you will need to override the default parameter class configuration with the following within your own app/config or your own prioritized bundle configuration (separate).

Example: Change the class from parameters yaml configuration as follows

     parameters:
        ezpublish.persistence.slug_converter.class: BrookinsConsulting\BcLowerCaseUrlAliasBundle\Core\Persistence\Legacy\Content\UrlAlias\BcLowerCaseDashUrlAliasSlugConverter


#### Further Expansion and Configuration

Worth noting that this bundle provides a decent example implementation which can simply be copied and or modified to meet your own specific requirements and needs.

You could easily use this bundle as an example on how to override yaml parameters, class overrides and url alias slug converter configurations.

With this knowlege you could create your own url alias slug converter configuration classes representing different website / app requirements.


Testing
=====

The solution is configured to work once properly installed and configured.

Note: At the time of writing xss testing has not been implemented nor proper unit testing.


Troubleshooting
===============

### Read the FAQ

Some problems are more common than others. The most common ones are listed in the the [Resources/doc/FAQ.md](Resources/doc/FAQ.md)


### Support

If you have find any problems not handled by this document or the FAQ you can contact Brookins Consulting through the support system: [http://brookinsconsulting.com/contact](http://brookinsconsulting.com/contact)

