<?php

namespace Service;

use GuzzleHttp;

class Spotify
{
    public function __construct()
    {

    }

    public function authorize()
    {
        $myClientId = 'e27895546b3a4fd5a45fae6b46d7029a';
        $scopes = null;
        $callbackUrl = 'http://serenajosewedding.l/callback';
        $client = new GuzzleHttp\Client();
        $res = $client->request(
            'GET',
            'https://accounts.spotify.com/authorize?response_type=code&client_id='
            . $myClientId . ($scopes ? '&scope=' . $scopes : '') . '&redirect_uri=' . $callbackUrl
        );
        dd($res);
    }

}
