<?php require_once('includes/header.php'); ?>
        <?php foreach ($news as $value) { ?>
        <div class="item-article">
            <h3><a href="index.php?c=article&id=<?=$value->getId()?>"><?=$value->getTitle()?></a></h3>
            <em>posted on <?=date('d.m.Y', strtotime($value->getDate()))?> by <?=$value->getAuthor()?></em>
            <p><?=$value->getExcerpt(); ?></p>
        </div>
        <?php } ?>
        
<?php require_once('includes/footer.php');?>
