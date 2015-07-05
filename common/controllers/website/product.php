
<?php
class ProductController extends Controller {
    public function index() {
        $p_collection = new ProductsCollection($_GET['id']);
        $products = $p_collection->get($_GET['id']);
        $pic = new ProductImageCollection($_GET['id']);
        $images = $pic->get_all();
        $this->loadView('website/products', array(
            'products' => $products,
            'products_images' => $images
        ));
    }   
}
?>