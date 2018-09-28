<?php
class Out_Of_StockCheckModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    $this->ajax = true;
    parent::initContent();
    
    if(isset($_GET['change_stock'])){
      if($this->changeOutOfStockColumn($_GET['change_stock']))
        echo 1;
      else 
        echo 0;
      
    }
    else {
      $this->checkOutOfStock();
    }
  }

  public function checkOutOfStock(){
    if(isset($_GET['product_id'])){
  
      $sql = 'SELECT out_of_stock FROM '._DB_PREFIX_.'product WHERE id_product = '.(int)$_GET['product_id'];
      $out_of_stock = (int)Db::getInstance()->getValue($sql);
      
        if($out_of_stock){
          echo 1;
          return;
        }
        else echo 0; 
    }
  }

  public function changeOutOfStockColumn($value){
    return Db::getInstance()->update('product', [
      'out_of_stock' => (int)$value
    ], "id_product = ".(int)Tools::getValue('checkboxProdId'));



    if($result){
      echo 1;
    }
    else echo 0;
  }
}