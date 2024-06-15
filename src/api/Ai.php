<?php

namespace App\api;

use App\HttpClient;
use GuzzleHttp\Client;

class Ai
{
    static $openAiCompletionsBase = 'https://api.openai.com/v1/chat/completions';
    /**
     * uses openAi public API to just generate some random single page 
     */
    public static function generateRandomHTML(): string
    {
        $guzzle = new Client();

        // make open ai api request

        $response = $guzzle->post(Ai::$openAiCompletionsBase, [
            'headers' => [
                'Content-Type'  => 'application/json',
                'Authorization' => 'Bearer ' . $_ENV['OPENAI_APIKEY'] ?? ''
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'You are an Website Generator. Respond only with HTML, CSS code single pages.'
                    ],
                    [
                        'role' => 'user',
                        'content' => 'Give me a website. Respond only with the single HTML, CSS page with all code embedded. Do not send any ```html around it. Just plain website code.'
                    ]
                ]
            ]
        ]);
        
        return json_decode($response->getBody())->choices[0]->message->content;
    }
}
