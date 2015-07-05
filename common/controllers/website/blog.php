<?php

class BlogController extends Controller {
    public function index() {

        $news_collection = new NewsCollection();
        $news = $news_collection->get_all();

        $this->loadView('website/blog', array(
            'news' => $news
        ));
        
    }
    
    public function comments() {
        $ncc = new NewsCommentCollection($_GET['id']);
        $data = $ncc->get_all();
        $this->loadView('website/blog', array(
            'data' => $data
        ));
    }

}