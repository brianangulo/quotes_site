<?php
    require_once __DIR__.'/../requires.php';
    if (isset($_POST['user'])) {
        header('Location: page2.php?user='.$_POST['user']);
    }
?>
<!--header-->
<?php Utils::includeIncluded('header.php'); ?>

<h1 class="name">my name is fool</h1>
<form method="post">
    <input type="text" name="user">
    <input type="submit">
</form>
<!--footer-->
<?php Utils::includeIncluded('footer.php'); ?>
<script src="js/script.js"></script>
