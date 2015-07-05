<?php

require_once('../common/bootstrap.php');

$products_collection = new ProductsCollection();
$products_collection->delete($_GET['id']);

header('Location: products.php');

?>