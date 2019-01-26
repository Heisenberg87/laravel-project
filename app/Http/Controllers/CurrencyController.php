<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Config;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $url;
    private $api_key;
    private $client;

    public function __construct()
    {
        $this->url = Config::get('services.forex.url');
        $this->api_key = Config::get('services.forex.api_key');
        $this->client = New Client();

    }

    public function index()
    {

        $url =  $this->url . 'symbols?api_key=' . $this->api_key;

        //make request
        $result = $this->client->request('GET', $url);

        $symbols = array();

        //split currency symbols
        foreach (json_decode($result->getBody()) as $res) {

            $str       = str_split($res, 3);
            $symbols[$str[0]] = $str[0];
            $symbols[$str[1]] = $str[1];
        }

        return view('currency.index')->with('symbols', $symbols);

    }

    /**
     * Search for a currency
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

        $query_string = http_build_query(array(
             'api_key' => $this->api_key,
             'from' => $request->from,
             'to' => $request->to ,
             'quantity' => 1
            )
        );

        $url =  $this->url . 'convert?' . $query_string;

        //make request
        $request = $this->client->request('GET', $url);

        $result = json_decode($request->getBody()->getContents());

        return json_encode([
            'text' => $result->text,
            'date' => date('d-m-Y H:i',$result->timestamp),
        ]);

    }


}
