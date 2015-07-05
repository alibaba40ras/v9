<?php require_once('includes/header.php'); ?>
<h1>Clients Requests</h1>
<table border="1" cellpadding="5" width="100%">
    <tr>
		<th>id</th>
        <th>Date</th>
        <th>Name</th>
        <th>Telephone</th>
		<th>E-mail</th>
		<th>Message</th>
		<th>Delete</th>
    </tr>
    <?php foreach ($contact as $value) { ?>
    <tr>
        <td><?php echo $value->getId();?></td>
        <td><?php echo $value->getDate(); ?></td>
        <td><?php echo $value->getName();?></td>
		<td><?php echo $value->getTel(); ?></td>
        <td><?php echo $value->getEmail(); ?></td>
		<td><?php echo $value->getMessage(); ?></td>
        <td>   
            <a href="index.php?c=contacts&a=delete&id=<?php echo $value->getId();?>">Iztrii</a>
        </td>
    </tr>
    <?php } ?>
</table>
<?php require_once('includes/footer.php'); ?>