<?php require_once('includes/header.php'); ?>

<h2>User Edit</h2>
<form action="" method="post" >
    <label>
        Username
        <input type="text" name="username" value="<?=$data->getUsername(); ?>"><br><br>
    </label>
    <label>
        Password
        <input type="password" name="password" value="<?=$data->getPassword(); ?>"><br><br>
    </label>
    <button type="submit">Edit</button>
</form>

<?php require_once('includes/footer.php'); ?>