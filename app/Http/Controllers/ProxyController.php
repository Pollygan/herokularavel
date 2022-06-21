<?php

namespace App\Http\Controllers;

use GuzzleHttp\Handler\Proxy;

class ProxyController extends Controller
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getData($collection)
    {
        $id = '';
        $request_url = $this->url.$id;
        $curl = curl_init($request_url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

        //API call with Authorization
        //Change the key with your settings
        // curl_setopt($curl, CURLOPT_HTTPHEADER, [
        //     'Content-Type: application/json',
        //     'Authorization: Bearer key'
        // ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}
