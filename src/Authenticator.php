<?php

namespace App;

class Authenticator
{
    /**
     * It'll return false or true based on whether the token is valid or not
     */
    public static function authenticate(string $token): bool
    {
        $file = __DIR__ . '/allowedTokens.json';
        $allowed_list = json_decode(file_get_contents($file))->allowed;
        
        for ($i = 0; $i < count($allowed_list); $i++) {
            if ($allowed_list[$i]->token == $token) {
                // allowed
                return  true;
            }
        }

        // not allowed
        return false;
    }
}
