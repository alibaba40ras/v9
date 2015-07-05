<?php

class IndexController extends Controller {
    public function index() {
    	$products_collection = New ProductsCollection;
    	$products = $products_collection->get_latest(4);
        $news_collection = New NewsCollection;
        $news = $news_collection->get_latest(3);
        $this->loadView('website/index', array(
        	'products'=>$products,
            'news' => $news
        	));
    }
  

}
