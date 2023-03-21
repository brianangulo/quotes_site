<?php
namespace App\api;
use App\Quotes;

/**
 * Class wrapper of the GuzzleHttp client for simplifying making api calls
 */
class Api
{
    /**
     * Random quote api service function
     * @return void echo a random quote json
     */
    public static function randomQuote(): void
    {
        header('Content-Type: application/json');
        echo Quotes::getRandomQuotableJson();
    }
}
