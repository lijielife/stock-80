<?php

class shopStockPluginBackendAction extends waViewAction {

    public function execute() {
        $id = waRequest::get('id', null, waRequest::TYPE_INT);

        $product_model = new shopProductModel();
        $product = $product_model->getById($id);
        if (!$product) {
            throw new waException(_w("Unknown product"));
        }
        
        $stock_model = new shopStockPluginModel();
        $stock = $stock_model->getByField('product_id',$id);

        $def_currency = wa('shop')->getConfig()->getCurrency(true);
        
        $this->view->assign('stock', $stock);
        $this->view->assign('product', $product);
        $this->view->assign('def_currency', $def_currency);
    }

}
