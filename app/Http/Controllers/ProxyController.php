<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProxyController extends Controller
{
    public function proxy(Request $request)
    {
        return response('Got here', 200);
        // $url = $request->query('url');
        // $client = new Client();
        
        // try {
        //     $response = $client->get($url);
            
        //     return Response::make($response->getBody()->getContents(), $response->getStatusCode(), $response->getHeaders());
        // } catch (\Exception $e) {
        //     return response('Error occurred while proxying the request.', 500);
        // }
    }
}
