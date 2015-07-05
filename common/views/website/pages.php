<?php require_once('includes/header.php'); ?>
<h2><?php echo strip_tags($data->getTitle())?></h2>
<div><?php echo strip_tags($data->getContent())?></div>
<?php require_once('includes/footer.php'); ?>