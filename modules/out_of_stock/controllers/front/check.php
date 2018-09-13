<?php
class Out_Of_StockCheckModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    $this->ajax = true;
    parent::initContent();
    
    if(isset($_GET['change_stock'])){
      $this->changeOutOfStockColumn($_GET['change_stock']);
    }
    else {
      $this->checkOutOfStock();
    }
  }

  public function checkOutOfStock(){
    if(isset($_GET['product_id'])){
      $db = Db::getInstance();
      $sql = 'SELECT out_of_stock FROM '._DB_PREFIX_.'product WHERE id_product = '.$_GET['product_id'];
      if($db->execute($sql)){
        $out_of_stock = $db->executeS($sql)[0]['out_of_stock'];
      
        if($out_of_stock){
          echo 1;
          return;
        }
        else echo 0;
      }
      else echo 0;
    }
  }

  public function changeOutOfStockColumn($value){
    $db = Db::getInstance();
    $sql = 'UPDATE '._DB_PREFIX_.'product SET out_of_stock='. $value .' WHERE id_product = '.$_GET['checkboxProdId'];
    if($db->execute($sql)){
      echo 1;
    }
    else echo 0;
  }
}