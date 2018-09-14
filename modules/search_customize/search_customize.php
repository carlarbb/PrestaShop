<?php   
require_once(dirname(__FILE__).'/classes/SearchFilter.php');
use PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchFilter;
if (!defined('_PS_VERSION_')) {
  exit;
}
class Search_Customize extends Module
{
    public function __construct()
    {
        $this->name = 'search_customize';
        $this->tab = 'front_office_features'; //set the module category
        $this->version = '1.0.0';
        $this->author = 'Carla Niculescu';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Search_customize module');
        $this->description = $this->l('Description of search module.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYMODULE_NAME'))
        $this->warning = $this->l('No name provided');
    }

    public function install()
    {
        if (Shop::isFeatureActive())
        Shop::setContext(Shop::CONTEXT_ALL); //pentru mai multe shop-uri

        if (!parent::install() ||
            !$this->registerHook('actionProductSearchAfter') ||
            !$this->registerHook('actionAjaxDieSearchControllerdoProductSearchBefore')
            )
            return false;
        return true;
    }

    protected function render($template, array $params = array())
    {
        $templateContent = '';
        $scope = $this->context->smarty->createData(
            $this->context->smarty
        );

        $scope->assign($params);
        $controller = new FrontController();
        try {
            $tpl = $this->context->smarty->createTemplate(
                $controller->getTemplateFile($template),
                $scope
            );

            $templateContent = $tpl->fetch();
        } catch (PrestaShopException $e) {
            PrestaShopLogger::addLog($e->getMessage());

            if (defined('_PS_MODE_DEV_') && _PS_MODE_DEV_) {
                $this->warning[] = $e->getMessage();
                $scope->assign(array('notifications' => $this->prepareNotifications()));

                $tpl = $this->context->smarty->createTemplate(
                    $controller->getTemplateFile('_partials/notifications'),
                    $scope
                );

                $templateContent = $tpl->fetch();
            }
        }

        return $templateContent;
    }

    public function hookActionProductSearchAfter($params) 
    { 
        $search = $params;
        $rendered_products_top = $this->render('catalog/_partials/products-top', array('listing' => $search));
        $rendered_products = $this->render('catalog/_partials/products', array('listing' => $search));
        $rendered_products_bottom = $this->render('catalog/_partials/products-bottom', array('listing' => $search));

        $data = array_merge(
            array(
                'rendered_products_top' => $rendered_products_top,
                'rendered_products' => $rendered_products,
                'rendered_products_bottom' => $rendered_products_bottom,
            ),
            $search
        );
        if (!empty($data['products']) && is_array($data['products'])) {
            $data['products'] = $this->prepareProductArrayForAjaxReturn($data['products']);
        }
        dump($data);
        die(json_encode($data));
    }

    public function prepareProductArrayForAjaxReturn($products){
        $filter = new SearchFilter();
        dump($products);
        dump($filter->filter($products));
        return $filter->filter($products);
    }

    public function hookActionAjaxDieSearchControllerdoProductSearchBefore($params){
       die;
    }

    public function uninstall()
    {
        if (!parent::uninstall())
            return false;

		return	true; 
    }
}