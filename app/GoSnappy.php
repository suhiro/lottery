<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class GoSnappy extends Model
{
    public static function getAuth()
    {
    	$client = new Client();
    	$link = 'https://gosnappy.io/v1/bp/login/6642';
    	$body = '';
    	$headers = [
    		'Authorization' => 'Basic cmVnaXN0cmF0aW9uOmhpcm8yMDE4'
    	];
    	$res = $client->request('POST',$link,['headers'=>$headers]);
    	return $res->getHeader('Authorization');
    }
}
