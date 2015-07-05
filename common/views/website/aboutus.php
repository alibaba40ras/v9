<?php require_once('includes/header.php'); ?>
    <div class="container-main">
    	<article>
    		<?php foreach ($data as $value) { ?>
			<h2><?php echo $value->getTitle(); ?></h2>
			<p>
				<?php echo $value->getContent();?>
			</p>
			<?php }?>
		</article>
<?php require_once('includes/footer.php'); ?>

