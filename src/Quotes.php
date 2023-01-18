<?php

namespace App;

use App\Api;

/**
 * Class will handle the grabbing of quotes from APIs and formatting
 */
class Quotes
{
    private static $quotableBaseUrl = 'https://quotable.io/';

    /**
     * Calls the quotable API and returns a formatted quote
     * @return string a formatted quote & actor
     */
    public static function getRandomQuotable(): string
    {
        $response = Api::getJson(self::$quotableBaseUrl . 'random');
        if ($response !== null) {
            $quote = $response['content'];
            $author = $response['author'];
            return self::formatQuote($quote, $author);
        }
        $errorMessage = 'Error occurred sorry, please try again.';
        return $errorMessage;
    }

    /**
     * Formats quote
     */
    private static function formatQuote(string $quote, string $author)
    {
        $formattedQuote = '"' . $quote . '"' . ' -' . $author;
        return $formattedQuote;
    }

    /**
     * Grabs a quotable random quote and returns it formatted as json with 1 key: 'quote'
     * @return string json object with a key of 'quote' containing the formatted quote
     */
    public static function getRandomQuotableJson(): string
    {
        $quote = self::getRandomQuotable();
        $quoteJson = ['quote' => $quote];
        return json_encode($quoteJson);
    }
}
