<?php require_once('includes/header.php'); ?>
    <div class="container-main">
			<section class="catalog-search">
            <form action="" method="post">
                <input id="search" type="text" name="search" value="<?php if ($search != '') { echo $search; }?>" placeholder="Search">
                <button type="submit">Search</button>
                <select name="orderby">
                    <option value="">Order By</option>
                    <option value="<?php if ($order_by == 'name') { echo 'selected="selected"'; } ?>">Name</option>
                    <option value="<?php if ($order_by == 'price') { echo 'selected="selected"'; } ?>">Price</option>
                </select>
                <div class="clear"></div>
            </form>
        </section>
        <section class="container-catalog">
            <?php foreach($products as $product) {?>
            <div class="item-product">
                
                <a href="index.php?c=product&id=<?=$product->getId()?>"><img src="../storage/<?=$product->getImage()?>"></a>
                <h3><a href="index.php?c=product&id=<?=$product->getId()?>"><?=$product->getTitle()?></a></h3>
                <em>$<?=$product->getPrice()?></em>
                <div class="clear"></div>
                <p>
                    Product Description:
                    <?=substr($product->getContent(), 0, 250);?>
                </p>
            </div>
            <?php }?>
        </section>
        <section class="pager">
            <?php for ($i = 1; $i <= $page_count; $i++) { ?>
            <a href="index.php?c=catalog&a=index&search=<?=$search;?>&order_by=<?=$order_by;?>&p=<?=$i;?>"><?=$i;?> |</a>
            <?php } ?>
        </section>
<?php require_once('includes/footer.php');?>