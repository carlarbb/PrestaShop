<?php
class Out_Of_StockCheckModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    $this->ajax = true;
    parent::initContent();
    $this->checkOutOfStock();
  }

  public function checkOutOfStock(){
    if(isset($_GET['product_id'])){
      $db = Db::getInstance();
      $sql = 'SELECT quantity FROM '._DB_PREFIX_.'stock_available WHERE id_product = '.$_GET['product_id'];
      if($db->execute($sql)){
        $getValues = $db->executeS($sql);
        $ok=1; //pp ca toate cantitatile sunt 0 
        foreach($getValues as $value){
          if($value['quantity'] != 0) $ok=0;
        }
        if($ok) {
          echo 1;
          return;
        }
      }
      echo 0;
    }
  }
}