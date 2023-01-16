<?php
    require __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/requires.php';
    use App\Utils;
    use App\Api;

    $quotableApi = 'https://quotable.io/random';
    $response = Api::getJson($quotableApi);
    $quote;
    if ($response !== null) {
        $quote = '"'.$response['content'].'"'.' -'.$response['author'];
    } else {
        $quote = 'Error occurred sorry, please try again.';
    }
?>

<!--header-->
<?php Utils::includes('header.php'); ?>

<h1 class="name">Fresh random quotes</h1>

<!-- quote -->
<h4><?php echo $quote ?></h4>

<!--footer-->
<?php Utils::includes('footer.php'); ?>

<script src="js/script.js"></script>
