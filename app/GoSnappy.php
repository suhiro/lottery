<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class GoSnappy extends Model
{
    public static function go($link)
    {
    	$client = new Client();
    	$res = $client->request('GET',$link,[]);
    	return $res;
    }
}
