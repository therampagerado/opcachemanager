<?php
/**
 * Copyright (C) 2017-2025 thirty bees
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.md
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@thirtybees.com so we can send you a copy immediately.
 *
 * @author    thirty bees <contact@thirtybees.com>
 * @copyright 2017-2025 thirty bees
 * @license   https://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

if (!defined('_TB_VERSION_')) {
    exit;
}

/**
 * Class OpcacheManager
 */
class OpcacheManager extends Module
{
    /**
     * OpcacheManager constructor.
     *
     * @throws PrestaShopException
     */
    public function __construct()
    {
        $this->name = 'opcachemanager';
        $this->tab = 'administration';
        $this->version = '1.0.3';
        $this->author = 'thirty bees';
        $this->bootstrap = true;
        $this->need_instance = false;
        parent::__construct();
        $this->displayName = $this->l('thirty bees Opcache Manager');
        $this->description = $this->l('View and manage your Opcache directly from your back office');
    }

    /**
     * @return string
     * @throws PrestaShopException
     * @throws SmartyException
     */
    public function getContent()
    {
        $this->context->smarty->assign([
            'module_dir' => $this->_path,
        ]);

        if (function_exists('opcache_get_configuration') && function_exists('opcache_get_status')) {
            return $this->display(__FILE__, '/views/templates/admin/enabled.tpl');
        } else {
            return $this->display(__FILE__, '/views/templates/admin/disabled.tpl');
        }
    }
}
