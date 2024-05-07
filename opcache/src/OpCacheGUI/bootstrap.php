<?php
/**
 * Bootstrap the library
 *
 * PHP version 5.5
 *
 * @category   OpCacheGUI
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk <https://github.com/PeeHaa>
 * @license    https://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */

namespace OpCacheGUI;

use OpCacheGUI\Core\Autoloader;

if (!defined('_TB_VERSION_')) {
    exit;
}

require_once __DIR__.'/Core/Autoloader.php';

$autoloader = new Autoloader(__NAMESPACE__, dirname(__DIR__));
$autoloader->register();
