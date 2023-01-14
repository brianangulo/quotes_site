<?php require_once __DIR__.'/../requires.php'; ?>

<?php Utils::includeIncluded('header.php'); ?>

<h1 class="name">This is the second page! Welcome <?php echo $_GET['user'] ?></h1>

<?php Utils::includeIncluded('footer.php'); ?>
