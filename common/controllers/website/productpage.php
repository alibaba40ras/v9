<?php 
class ProductpageController extends Controller {
    
    public function index() {
    	$p_collection = new ProductsCollection();
        $products = $p_collection->get($_GET['id']);        
		$orders_collection = new OrdersCollection();
		$orders = $orders_collection->get_all();
		$this->loadView('website/productpage', array(
		        	'products'=>$products,
		            'orders' => $orders
		        ));
	
		$orders_collection = new OrdersCollection();
		if(isset($_GET['submit'])){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		    $orders = new OrderEntity();
		    $orders
		    		->setName($_POST['name'])
		    		->setEmail($_POST['email'])
		    		->setProductId($_GET['id'])
		    		->setDate(date('Y-m-d; H:i:s'))
		    		->setTel($_POST['tel']);
		    $orders_collection->save($orders);
		    
		}
	}
		$orders_collection = new OrdersCollection();
		$orders = $orders_collection->get_all();
		$this->loadView('website/productpage');
	
		
	}
}
?>
