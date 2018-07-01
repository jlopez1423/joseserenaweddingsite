<?php

namespace App\Library;

use GuzzleHttp;


class SpotifyService
{
    private $guzzleClient;

    public function __construct()
    {
        $this->guzzleClient = new GuzzleHttp\Client();

    }

    public function authorize()
    {
        $myClientId = getenv('SPOTIFY_CLIENT_ID');
        $scopes = 'user-read-private user-read-email';
        $callbackUrl = 'http://serenajosewedding.l/callback';
        $res = $this->guzzleClient->request(
            'GET',
            'https://accounts.spotify.com/authorize?response_type=code&client_id='
            . $myClientId . ($scopes ? '&scope=' . $scopes : '') . '&redirect_uri=' . $callbackUrl
        );
        return $this;
    }

    public function getPlayLists()
    {
        $test = $this->authorize();
        $headers = [
            'headers' => [
                'Authorization: Bearer '
            ],
        ];

        $userId = '12133535851';
        $res = $this->guzzleClient->request(
            'GET',
            ' https://api.spotify.com/v1/users/12133535851/playlists'

        );
        dd($res);
    }
}
