<?php
/**
 * Interface for presentation renderers
 *
 * PHP version 5.5
 *
 * @category   OpCacheGUI
 * @package    Presentation
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2014 Pieter Hordijk <https://github.com/PeeHaa>
 * @license    https://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */

namespace OpCacheGUI\Presentation;

if (!defined('_TB_VERSION_')) {
    exit;
}

/**
 * Interface for presentation renderers
 *
 * @category   OpCacheGUI
 * @package    Presentation
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
interface Renderer
{
    /**
     * Renders a template
     *
     * @param string $template The template to render
     * @param array  $data     The data to use in the template
     */
    public function render($template, array $data = []);
}
