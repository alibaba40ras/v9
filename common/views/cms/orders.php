<?php require_once('includes/header.php'); ?>
<h1>Orders</h1>
<table border="1" cellpadding="5" width="100%">
    <tr>
        <th>Dobaven na</th>
        <th>Ime</th>
        <th>email</th>
        <th>tel</th>
		<th>produkt</th>
		<th>cena</th>
        <th>complete</th>
    </tr>
    <?php foreach ($orders as $value) { ?>
    <tr <?php if ($value->getIsComplete()) { ?> style="background: lightGreen" <?php } ?>>
        <td><?php echo $value->getDate(); ?></td>
        <td><?php echo $value->getName(); ?></td>
		<td><?php echo $value->getEmail(); ?></td>
        <td><?php echo $value->getTel(); ?></td>
		<td><?php echo $value->getProductTitle(); ?></td>
		<td><?php echo $value->getProductPrice();?></td>
        <td><input type="checkbox" class="complete" <?php if ($value->getIsComplete()) { ?> checked="checked" <?php }?> value="<?php echo $value->getId(); ?>"></td>
    </tr>
    <?php } ?>
</table>
<br>
<?php require_once('includes/footer.php'); ?>