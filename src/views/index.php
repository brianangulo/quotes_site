<?php
use App\Quotes;

$quote = (new Quotes())->getRandomQuotable();
?>

<!--header-->
<?php require __DIR__ . '/header.php' ?>
<div class="container container-fluid min-vh-100 justify-content-center align-item-center d-flex flex-column text-center">
    <h2 class="text-primary pb-4">Refresh for quotes</h2>
    <!-- quote -->
    <h4 id="quote"><?php echo $quote ?></h4>
    <button id="refreshButton" onclick="refreshQuote()" style="max-width: fit-content" type="button" class="btn btn-primary btn-md align-self-center mt-4">
        <span hidden class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        New Quote
    </button>
</div>
<!--footer-->
<?php require __DIR__ . '/footer.php' ?>
<script defer src="js/script.js"></script>
