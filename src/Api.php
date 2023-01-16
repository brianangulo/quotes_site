<?php
namespace App;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

/**
 * Class wrapper of the GuzzleHttp client for simplifying making api calls
 */
class Api
{
    public static function getJson(string $url): array | null {
        $client = new Client();
        try {
            $response = $client->get($url, ['http_errors' => true]);
            return json_decode($response->getBody(), true);
        } catch (BadResponseException $err) {
            error_log('Error occurred on Api::getJson: '.$err->getMessage());
            return null;
        }
    }
}
