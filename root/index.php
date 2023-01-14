<?php
    if (isset($_POST['user'])) {
        header('Location: page2.php?user='.$_POST['user']);
    }
?>
<!--header-->
<?php include __DIR__.'/includes/header.php' ?>
<h1 class="name">my name is <?php echo __DIR__ ?> </h1>
<form method="post">
    <input type="text" name="user">
    <input type="submit">
</form>
<!--footer-->
<?php include __DIR__.'/includes/footer.php' ?>
<script src="js/script.js"></script>