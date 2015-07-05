<?php
class PagesController extends Controller {
    public function index() {
        $pages_collection = new PagesCollection();
        $pages = $pages_collection->get_all();
        $data = $pages_collection->get($_GET['id']);
        $this->loadView('website/pages', array(
            'data' => $data
        ));
    }
}