<?php

class ProductsController extends CmsController {
    public function index() {

        $products_collection = new ProductsCollection();
        $products = $products_collection->get_all();

        $this->loadView('cms/products', array(
            'products' => $products
        ));
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $product = new ProductEntity();
            $product
                ->setTitle($_POST['title'])
                ->setContent($_POST['content'])
                ->setPrice($_POST['price']);

            if ($_FILES['image']['tmp_name'] != '') {
                $product->saveImage($_FILES['image']);
            }
            
            $product_collection = new ProductsCollection();
            $product_collection->save($product);
            
            header('Location: index.php?c=products');
        }

        $this->loadView('cms/products_add');
    }

    public function edit() {
        $products_collection = new ProductsCollection();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $product = new ProductEntity();
            $product
                ->setId($_GET['id'])
                ->setTitle($_POST['title'])
                ->setContent($_POST['content'])
                ->setPrice($_POST['price']);

            if ($_FILES['image']['tmp_name'] != '') {
                $product->saveImage($_FILES['image']);
            }

            $products_collection->save($product);

            header('Location: index.php?c=products');
        }


        $data = $products_collection->get($_GET['id']);

        $this->loadView('cms/products_edit', array(
            'data' => $data
        ));
    }

    public function delete() {
        $news_collection = new NewsCollection();
        $news_collection->delete($_GET['id']);
        header('Location: index.php?c=products');
    }

    public function gallery() {
        $ncc = new ProductImageCollection($_GET['id']);
        

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $image = new ProductImageEntity();
            $image->setProductId($_GET['id']);

            if ($_FILES['image']['tmp_name'] != '') {
                $image->saveImage($_FILES['image']);
            }

            $ncc->save($image);
        }

        $data = $ncc->get_all();

        $this->loadView('cms/products_gallery', array(
            'data' => $data
        ));
    }

    public function gallery_delete() {
        
        $ncc = new ProductImageCollection($_GET['products_id']);
        $ncc->delete($_GET['id']);
        header('Location: index.php?c=products&a=gallery&id='.$_GET['product_id']);
    }
}