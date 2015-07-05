
<?php require_once('includes/header.php'); ?>

<h2>Products Add</h2>
<form action="" method="post" enctype="multipart/form-data">
    <label>
        Title
        <input type="text" name="title" ><br><br>
    </label>
	<label>
        Price
        <input type="text" name="price"><br><br>
    </label>
    <label>
        Picture
        <input type="file" name="image"><br><br>
    </label>
    <label>
        Description<br>
        <textarea rows="10" cols="50" name="content"></textarea><br><br>
    </label>
    <button type="submit">ADD</button>
</form>

<?php require_once('includes/footer.php'); ?>