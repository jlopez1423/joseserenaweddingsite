<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpotifyController
{
    public function callback(Request $request)
    {
        file_put_contents('/tmp/test-spotify.txt', print_r($request, true));
    }

    public function login() {
        return view('spotify.login');
    }
}
