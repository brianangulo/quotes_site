<?php
require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/requires.php';

use App\Utils;
use App\Api;

$quotableApi = 'https://quotable.io/random';
$response = Api::getJson($quotableApi);
$quote;
if ($response !== null) {
    $quote = '"' . $response['content'] . '"' . ' -' . $response['author'];
} else {
    $quote = 'Error occurred sorry, please try again.';
}
?>

<!--header-->
<?php Utils::includes('header.php'); ?>
<div class="container container-fluid min-vh-100 justify-content-center d-flex flex-column text-center">
    <h2 class="text-primary pb-4">Refresh for quotes</h2>

    <!-- quote -->
    <h4><?php echo $quote ?></h4>
</div>
<!--footer-->
<?php Utils::includes('footer.php'); ?>
