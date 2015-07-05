<?php require_once('includes/header.php'); ?>
       </section >
        <h2><?php echo $news->getTitle();?></h2>
        <em>posted on <?=date('d.m.Y', strtotime($news->getDate()));?> by <?=$news->getAuthor();?></em>
        <div class="container-main">
            <img src="../storage/<?=$news->getImage();?>">
        </div>
        <div><?php echo $news->getContent()?></div>
        </section>
        <section class="container-comments">
            <div class="comments">Comments</div>
            <?php foreach($comments as $value) {?>
            <em><?=$value->getName().' sad on the '. date('jS \of F', strtotime($value->getDate()));?>
            </em>
            <p>
                <?=$value->getContent() ?>
            </p>
            <?php }?>
        </section>
        <section class="container-form">
            <fieldset>
                <legend>
                    <span>
                    Comment Yourself
                    </span>
                </legend>
            <form action=" " method="post">            
                <label>
                    <span>
                        Name
                    </span>
                    <input type="text" name ="name" >
                </label>
                <label>
                    <span>
                        Comment
                    </span>
                    <textarea name="content"></textarea>
                </label>
                    <button type="submit">Comment
                    </button>
        </form>
        </fieldset>
        </section>
<?php require_once('includes/footer.php'); ?>