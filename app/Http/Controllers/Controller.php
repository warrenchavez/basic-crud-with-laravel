<?php

namespace App\Http\Controllers;

use Log;
use View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function newsfeedData()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://rest.learncode.academy/api/warren/newsfeed/');
        $result= json_decode($res->getBody(), true);
        Log::Info($result);
    	return View::make('newsfeed') -> with ('results', $result);
    }

    // public function newsfeedPost()
    // {
    //     $client = new Client();
	   //  $res = $client->request('POST', 'http://rest.learncode.academy/api/warren/newsfeed/', [
	   //  	'form_params' => [
	   //  		'post' => 'hahaha'
	   //  	]
	   //  ]);
	   //  $result= $res->getBody();
	   //  Log::Info($result);
    // }   


}
