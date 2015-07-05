<?php
class OrdersController extends CmsController {
    public function index() {

        $orders_collection = new OrdersCollection();
        $orders = $orders_collection->get_all();

        $this->loadView('cms/orders', array(
            'orders' => $orders
        ));
    }
    public function completeorder() {
        $oc = new OrdersCollection();
        $o = $oc->get($_GET['id']);
        $o->setIsComplete($_GET['is_complete']);
        $oc->save($o);
    }
}