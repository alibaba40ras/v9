
<?php require_once('includes/header.php'); ?>

<h2>Products Edit</h2>
<form action="" method="post" enctype="multipart/form-data">
    <label>
        Title
        <input type="text" name="title" value="<?=$data->getTitle(); ?>"><br><br>
    </label>
	<label>
        Price
        <input type="text" name="price" value="<?=$data->getPrice(); ?>"><br><br>
    </label>
    <label>
        Picture
        <?php if ($data->getImage() != '') { ?>
        <img src="../storage/<?=$data->getImage()?>" width="300"><br>
        <?php } ?>
        <input type="file" name="image"><br><br>
    </label>
    <label>
        Description<br>
        <textarea rows="10" cols="50" name="content"><?=$data->getContent(); ?></textarea><br><br>
    </label>
    <button type="submit">Edit</button>
</form>

<?php require_once('includes/footer.php'); ?>