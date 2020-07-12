<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function single()
    {
        $client = new Client();
        try {
            $res = $client->request('GET', env("MIDTRANS_API"), []);
            $data = json_decode($res->getBody()->getContents());
            // dd($data);
            return view('single', ['token' => $data->token]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
