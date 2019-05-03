<?php
/**
 * Created by PhpStorm.
 * User: Yuriy
 * Date: 5/2/2019
 * Time: 5:23 PM
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class Mymodule extends Module
{

    public function __construct()
    {
        $this->name = 'testmodule2';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Am I';
        $this->need_instance = 0;


        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Test Module 2');
        $this->description = $this->l('Yeahh Yeahh Yeahh Yeahh Yeahh ');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /**
     * @return bool
     * @throws PrestaShopException
     */

    public function install() {

        if(Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        if(!parent::install() ||
        !$this->registerHook('left_column') ||
        !$this->registerHook('header') ||
            !Configuration::updateValue('MYMODULE_NAME', 'my friend')
        ) {
            return false;
        }

        return true;
    }

    public function uninstall()
    {
        if (parent::uninstall() || !Configuration::deleteByName('MYMODULE_NAME')
        ) {
            return false;
        }

        return true;
    }

    public function hookLeftColumn() {
        return "Hello from " + $this->name;
    }

}