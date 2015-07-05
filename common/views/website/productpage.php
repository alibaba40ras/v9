<?php require_once('includes/header.php'); ?>


    <div class="container-main">
        <h2>Orders</h2>
        
        <p>
            Suspendisse sed odio odio. Duis et rhoncus libero. Curabitur aliquet, lacus non aliquam ullamcorper
        </p>
        <section class="contact-text">
            <h2><?=$products->getTitle()?></h2>
            <em>$<?=$products->getPrice()?></em>
        </section>
        <section class="contact-form">
            <h3>Purchase Form</h3>
            
            <form action="" method="post" >
                <label>
                    <span>Name:</span>
                    <input type="text" name="name" value="">
                </label>
                <label>
                    <span>Email:</span>
                    <input type="text" name="email" value="">
                </label>
                <label>
                    <span>Telephone:</span>
                    <input type="text" name="tel" value="">
                </label>
                <button type="submit">Buy</button>
            </form>
        </section>
<?php require_once('includes/footer.php'); ?>