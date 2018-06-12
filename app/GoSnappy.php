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
    public static function pushCustomer($participant){
    	$client = new Client();
    	$link = 'https://gosnappy.io/v1/rw/guest/directregister';
    	$headers = [
    		'Authorization' => self::getAuth(),
    		'storeId' => '6642',
    		'app-name' => 'RW',
    		'Content-Type' => 'application/json'
    	];
    	$body = [
    		'storeId' => '6642',
    		'telephone' => $participant->phone,
    		'guestAttributes' => [
    			"NAME" => $participant->firstName.' '.$participant->lastName,
    			"EMAIL" => $participant->email,
    			"ip_address" => $participant->ip_address
    		]

    	];
    	$res = $client->request('POST',$link,['headers' => $headers, 'body'=>json_encode($body)]);
    	return $res;
    }
}
