<?php

namespace App\api;

use App\Quotes;

/**
 * Class wrapper of the GuzzleHttp client for simplifying making api calls
 */
class QuotesApi
{
    /**
     * Random quote api service function
     * @return void echo a random quote json
     */
    public static function randomJsonQuote(Quotes $quotes): void
    {
        header('Content-Type: application/json');
        $jsonQuote = self::quoteToJson($quotes->getRandomQuotable());
        echo $jsonQuote;
    }

    /**
     * Grabs a quotable random quote and returns it formatted as json with 1 key: 'quote'
     * @return string json object with a key of 'quote' containing the formatted quote
     */
    public static function quoteToJson(string $quote): string
    {
        $quoteJson = ['quote' => $quote];
        return json_encode($quoteJson);
    }
}
