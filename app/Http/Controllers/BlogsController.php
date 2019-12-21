<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BlogsController extends Controller
{
    function index()
    {
    	$client = new Client();
    	$response = $client->request('GET', 'https://api.unsplash.com/photos/?client_id=3d77aff3927eb8ce8b240e1ad5eb2bf682927dc74361ce98e451a87b1090480f');
    	$statusCode = $response->getStatusCode();
    	$imageJson = $response->getBody()->getContents();
    	$images = json_decode($imageJson);
    	//dd($images, $imageJson);
    	return view('index', compact("images"));
    }
}
