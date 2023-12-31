<?php

namespace App\Http\Controllers\Traits;


use GuzzleHttp\Client;


trait RefreshClientProfile
{
    public function refreshClientProfile($clientId){
        $client = new Client();

        $url = "http://subscriptionmanagementsystem.test/api/clients/{$clientId}/profile/refresh";

        $response = $client->request('GET', $url, [
            'headers' => [
                'api-key' => 'Po77NiLBrg',
            ],
        ]);
        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            return true;
        } else {
            return false;
        }
    }


}
