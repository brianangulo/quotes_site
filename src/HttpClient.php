<?php

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

/**
 * Wrapper for GuzzleHttp client
 */
class HttpClient
{
    public static function getJson(string $url): array | null {
        $client = new Client();
        try {
            $response = $client->get($url, ['http_errors' => true]);
            return json_decode($response->getBody(), true);
        } catch (BadResponseException $err) {
            error_log('Error occurred on HttpClient::getJson: '.$err->getMessage());
            return null;
        }
    }
}
