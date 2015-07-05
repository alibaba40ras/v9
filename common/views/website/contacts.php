<?php require_once('includes/header.php'); ?>
    <div class="container-main">
        <h2>Our Address</h2>
        <section class="contact-text">
            <h1></h1>
            <address>
                <p>39, ul. Konstantin Velichkov<br>
                    4000, Plovdiv<br>
                    Bulgaria<br>
                    tel: +359 88 456 897<br>
                </p>
            </address>
        </section>
        <section class="contact-form">
            <h3>Contact Form</h3>
            <form action="" method="post">
                <?php //if ($success == 1) echo 'Success!!!!'; ?>
                <label>
                    <span>Name</span>
                    <input type="text" name="name" value="">
                </label>
                <label>
                    <span>Email</span>
                    <input type="text" name="email" value="">
                </label>
                <label>
                    <span>Phone</span>
                    <input type="text" name="tel" value="">
                </label>
                <label>
                    <span>Message</span>
                    <textarea name="message"></textarea>
                </label>
                <button type="submit">Send</button>
            </form>
        </section>
        <section class="contact-map">
            <img src="../storage/karta.jpg" >
        </section>
<?php require_once('includes/footer.php'); ?>