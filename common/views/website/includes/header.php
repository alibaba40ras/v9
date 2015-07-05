
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Online Shop</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <a href="index.php"><img src="img/image.jpg"></a>
        <h1>Online FISH Shop</h1>
        <div class="clear"></div>
    </header>
    <nav>
        <div>Menu</div>
        <a href="index.php">Home</a>
        <?php foreach ($pages as $value) { ?>
        <a href="index.php?c=pages&id=<?=$value->getId()?>"><?=$value->getTitle()?></a>
        <?php } ?>
        <a href="index.php?c=contacts">Contacts</a>
        <a href="index.php?c=catalog">Catalog</a>
        <a href="index.php?c=blog">Blog</a>
    </nav>
    <div class="container-main">


