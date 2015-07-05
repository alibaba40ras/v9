
<?php require_once('includes/header.php'); ?>
        <section>
            <h1> Welcome </h1>
            <p> 
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
               when an unknown printer took a galley of type and scrambled it to make a type 
               specimen book.
            </p>
        </section>
        <section class="container-product-promo">
            <?php foreach ($products as $value) {?>
            <div class="item-product">
                <a href="index.php?c=product&id=<?=$value->getId();?>"><img src="../storage/<?=$value->getImage();?>"></a>
                <h3><a href="index.php?c=product&id=<?=$value->getId();?>"><?=$value->getTitle();?></a></h3>
                <em><a href="index.php?c=product&id=<?=$value->getId();?>"><?='$'.$value->getPrice();?></a></em>
            </div>
             <?php }?>
        </section> 
        <div class="clear"></div>
        <section class="container-news">
            <h2>Latest News</h2>
            <?php foreach ($news as $new_news) {?>
                <p>
                    <?php echo $new_news->getExcerpt(); ?>
                    <a href="index.php?c=article&id=<?=$new_news->getId();?>">Read More...</a>
                </p>
            <?php }?>
        </section>
        <?php require_once('includes/footer.php');