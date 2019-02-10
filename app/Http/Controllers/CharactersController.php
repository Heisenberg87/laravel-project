<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Config;

class CharactersController extends Controller
{

    private $api_key = null;
    private $hash = null;
    private $url = null;
    private $client = null;
    private $timestamp = null;

    public function __construct()
    {
        $this->url = Config::get('services.marvel.url');
        $this->api_key = Config::get('services.marvel.api_key');
        $this->timestamp = time();
        $this->hash = md5($this->timestamp . Config::get('services.marvel.private_key') . $this->api_key);
        $this->client = New Client();
    }

    function index()
    {
    }

    function search(Request $request)

    {
        //bulid url
        $query_parms = http_build_query(
            array(
                'nameStartsWith' => $request->name,
                'apikey' => $this->api_key,
                'hash' => $this->hash,
                'limit' => 20,
                'ts' => $this->timestamp
            )
        );

       $request = $this->client->request('GET', $this->url . 'characters?' . $query_parms);

        $char = '';
        if($request->getStatusCode() == 200) {

            $result = json_decode($request->getBody()->getContents());

            if (count($result->data->results)) {
                foreach ($result->data->results as $data) {
                    $char .= "<li class='list-group-item bg-dark border-primary p-1'><a href='/character/" . $data->id . "'><img width=30 height=30 class='rounded' src='" . $data->thumbnail->path . '.' . $data->thumbnail->extension . "'><span class='ml-2 text-white'>" . $data->name . "</span></a></li>";
                }

                return json_encode(array('result' => $char));
            }

            return json_encode(array('result' => "<li class='list-group-item bg-dark border-primary p-1 text-white'>no results</li>"));
        }

        return $request->getBody()->getContents();
    }

    public function show($id)
    {

        //bulid url
        $query_parms = http_build_query(
            array(
                'apikey' => $this->api_key,
                'hash' => $this->hash,
                'ts' => $this->timestamp
            )
        );

        $requestChar = $this->client->request('GET', $this->url . 'characters/' . $id . '?' . $query_parms)->getBody()->getContents();

        $responseChar = json_decode($requestChar);

        $requestComics = $this->client->request('GET', $this->url . 'characters/' . $id . '/comics?' . $query_parms)->getBody()->getContents();

        $responseComics = json_decode($requestComics);


        return view('characters.show')->with('data', $responseChar->data->results[0])->with('comics', $responseComics->data->results);


    }

}
