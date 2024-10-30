<?php

namespace App\Api;

use Google\Client;
use Google\Service\MyBusinessAccountManagement;

class Nps
{
    public function getGoogleReviews()
    {
        

        $response = file_get_contents($url);
        $data = json_decode($response, true);

    }

    function getGoogle()
    {
        $jsonPath = __DIR__ . '/../../apideveloper-440116-d4946781ce17.json';

        $client = new Client();
        $client->setAuthConfig($jsonPath);
        $client->addScope("https://www.googleapis.com/auth/business.manage");
        $service = new MyBusinessAccountManagement($client);
        $accounts = $service->accounts->listAccounts();
        dd($accounts);
    }
}



//Api Key: AIzaSyDuGN_f33pKygX_WpQesFyxgrFWA7qxNGY

//Place ID: ChIJW2IGzwfYzZQR5Jm1vj9VyAY
