<?php

namespace App\Library;

use GuzzleHttp;


class SpotifyService
{
    private $guzzleClient;
    private $myClientId;
    private $clientSecret;

    public function __construct()
    {
        $this->guzzleClient = new GuzzleHttp\Client();
        $this->myClientId = getenv('SPOTIFY_CLIENT_ID');
        $this->clientSecret = getenv('SPOTIFY_CLIENT_SECRET');
    }

    public function authorize()
    {
        $scopes = 'user-read-private user-read-email';
        $callbackUrl = 'http://serenajosewedding.l/callback';
        $res = $this->guzzleClient->request(
            'GET',
            'https://accounts.spotify.com/authorize?response_type=code&client_id='
            . $this->myClientId . ($scopes ? '&scope=' . $scopes : '') . '&redirect_uri=' . $callbackUrl
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

    public function getSpotifyAccessToken()
    {

        $res = $this->guzzleClient->post(
            'https://accounts.spotify.com/api/token',
            [
                'headers' => [
                    'grant_type' => 'client_credentials',
                ]

            ]
        );
    }
}
