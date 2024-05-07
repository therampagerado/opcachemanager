<?php
/**
 * This file can be used to simply change the environment specific configuration
 * preventing having to commit you configuration files
 *
 * PHP version 5.5
 *
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk <https://github.com/PeeHaa>
 * @license    https://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */

if (!defined('_TB_VERSION_')) {
    exit;
}

require_once __DIR__ . '/init.example.php';
