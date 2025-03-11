<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Barryvdh\DomPDF\Facade as PDF;
use GuzzleHttp\Client;
use Adldap\Laravel\Facades\Adldap;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use Spatie\SimpleExcel\SimpleExcelReader;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ConnectException;

class FlagAppController extends Controller {

    public function getRandomAmounts() {
        return mt_rand(100000000, 999999999) . "." . mt_rand(00, 99);
    }

   
    public function listCountry() {

                    $client = new Client([
                   'base_uri' => 'http://localhost:8082',
                   'timeout' => 2000.0,
               ]);
               $response = $client->request('GET', '/countries', [
                   'json' => [
                   ],
               ]);

              
              $result = json_decode($response->getBody()->getContents(), true); 

              $data = array(
                'countries' => $result );
            
// return $result[0]['name'];
     return  view('countries',   $data) ;
    }

    

}
