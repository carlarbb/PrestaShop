<?php   
if (!defined('_PS_VERSION_')) {
  exit;
}
class Out_Of_Stock extends Module
{
    public function __construct()
    {
        $this->name = 'out_of_stock';
        $this->tab = 'front_office_features'; //set the module category
        $this->version = '1.0.0';
        $this->author = 'Carla Niculescu';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Out of stock module');
        $this->description = $this->l('Description of out_of_stock module.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYMODULE_NAME'))
        $this->warning = $this->l('No name provided');
    }

    public function install()
    {
        if (Shop::isFeatureActive())
        Shop::setContext(Shop::CONTEXT_ALL); //pentru mai multe shop-uri

        Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'out_of_stock` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `id_product` int(11) NOT NULL,
            `date_add` datetime NOT NULL,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
        ');

        if (!parent::install() ||
            !$this->registerHook('displayBackOfficeHeader')
            )
            return false;
        return true;
    }
    public function hookDisplayBackOfficeHeader($params) 
    {
        if ($this->context->controller->php_self == "AdminProducts") {
            $this->context->controller->addJS($this->_path.'js/out_of_stock.js', 'all');
        }
        return $this->display(__FILE__, 'sendControllerLink.tpl');
        //dump($this->context->link->getModuleLink('out_of_stock', 'display')); die;
    }
}