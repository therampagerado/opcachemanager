<?php
/**
 * Storage exception class for when trying to access an invalid store
 *
 * PHP version 5.5
 *
 * @category   OpCacheGUI
 * @package    Storage
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2014 Pieter Hordijk
 * @license    https://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */

namespace OpCacheGUI\Storage;

if (!defined('_TB_VERSION_')) {
    exit;
}

/**
 * Storage exception class for when trying to access an invalid store
 *
 * @category   OpCacheGUI
 * @package    Storage
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class InvalidKeyException extends \Exception
{
}
