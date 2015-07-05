
<?php 
class ArticleController extends Controller {
    public function index() {

        $news_collection = new NewsCollection();
        $news = $news_collection->get($_GET['id']);
        
        $ncc = new NewsCommentCollection($_GET['id']);
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $comment = new NewsCommentEntity();
            $comment->setName($_POST['name']);
            $comment->setContent($_POST['content']);
            $comment->setDate(date('Y-m-d H:i:s'));
            $comment->setNewsId($_GET['id']);
            $ncc->save($comment);
        }
        $ncc = new NewsCommentCollection($_GET['id']);
        $data = $ncc->get_all();
        $this->loadView('website/article', array(
            'news' => $news,
            'comments' => $data,
        ));
    }
}
?>
