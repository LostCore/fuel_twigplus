<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.6
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

Autoloader::add_namespace('TwigPlus',PKGPATH.'twigplus/');

Autoloader::add_classes(array(
    'TwigPlus\\TwigPlus'    => PKGPATH.'twigplus/classes/twigplus.php',
));

/* End of file bootstrap.phpp */
