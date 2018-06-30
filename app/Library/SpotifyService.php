<?php

namespace App\Library;

use GuzzleHttp;


class SpotifyService
{
    public function authorize()
    {
        $myClientId = getenv('SPOTIFY_CLIENT_ID');
        $scopes = null;
        $callbackUrl = 'http://serenajosewedding.l/callback';
        $client = new GuzzleHttp\Client();
        $res = $client->request(
            'GET',
            'https://accounts.spotify.com/authorize?response_type=code&client_id='
            . $myClientId . ($scopes ? '&scope=' . $scopes : '') . '&redirect_uri=' . $callbackUrl
        );
        return $this;
//        dd($res);
    }
}
