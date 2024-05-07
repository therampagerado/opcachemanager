<?php
/**
 * Exception which gets thrown when an unsupported algorithm is used
 *
 * PHP version 5.5
 *
 * @category   OpCacheGUI
 * @package    Security
 * @subpackage Generator
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2014 Pieter Hordijk
 * @license    https://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */

namespace OpCacheGUI\Security\Generator;

if (!defined('_TB_VERSION_')) {
    exit;
}

/**
 * Exception which gets thrown when an unsupported algorithm is used
 *
 * @category   OpCacheGUI
 * @package    Security
 * @subpackage Generator
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class UnsupportedAlgorithmException extends \Exception
{
}
