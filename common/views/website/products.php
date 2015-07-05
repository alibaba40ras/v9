
<?php require_once('includes/header.php'); ?>
    <div class="container-main">
        <article class="product">
            <section class="product-head">
                <img src="../storage/<?=$products->getImage()?>">
                <div class="container-column">
                    <h2><?=$products->getTitle()?></h2>
                    <em>$<?=$products->getPrice()?></em>
                    <form action="index.php?c=productpage&id=<?=$products->getId();?>" method="post">
                        <button type="submit">Buy Now</button>
                    </form>
                </div>
                <div class="clear"></div>
            </section>
            <div class="clear"></div>
            <section class="product-desc">
                <p>
                    <?=$products->getContent();?>
                </p>
            </section>
            <section class="product-gallery">
                <h3>Gallery</h3>
                <div>
                    <?php foreach ($products_images as $value) { ?>
                    <img class="last" src="../storage/<?=$value->getImage(); ?>">
                    <?php } ?>
                </div>
            </section>
        </article>
<?php require_once('includes/footer.php');?>