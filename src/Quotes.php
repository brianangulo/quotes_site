<?php

namespace App;

/**
 * Class will handle the grabbing of quotes from APIs and formatting
 */
class Quotes
{
    private static string $quotableBaseUrl = 'https://quotable.io/';

    /**
     * Calls the quotable API and returns a formatted quote
     * @return string a formatted quote & actor
     */
    public function getRandomQuotable(): string
    {
        $response = HttpClient::getJson(self::$quotableBaseUrl . 'random');
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
}
