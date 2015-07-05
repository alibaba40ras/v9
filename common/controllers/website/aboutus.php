<?php
class AboutUsController extends Controller {
    public function index() {
        $pages_collection = new PagesCollection();
        $data = $pages_collection->get($_GET['id']);
        $this->loadView('website/pages', array(
            'data' => $data
        ));
    }
    
}