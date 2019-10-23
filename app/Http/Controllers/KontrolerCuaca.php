<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class KontrolerCuaca extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {        
        //
        $api_key = "33bc5f242724a513b19764d71eb9094d";
        $api_key1 = "AIzaSyDM3-iAZC6kWoFHgW5RVtgKKlr2XKKHS9c";
        $iduser = "UCwA5IPY5-Gfj1ACDbwurCNA";
        $client = new Client();

        $response = $client->request('GET', 'api.openweathermap.org/data/2.5/weather?',[
            'query' => [
                'appid' => $api_key,
                'q' => 'Bandung',
                'mode' => 'html'
            ]
        ]);

        $response1 = $client->request('GET', 'https://www.googleapis.com/youtube/v3/channels?',[
            'query' => [
                'key' => $api_key1,
                'id' => $iduser,
                'part' => 'snippet,statistics'
            ]
        ]);

        $response2 = $client->request('GET', 'https://www.googleapis.com/youtube/v3/search?',
        [
            'query' => [
                'part' => 'snippet',
                'channelId' => $iduser,
                'maxResults' => '10',
                'order' => 'date',
                'type' => 'video',
                'key' => $api_key1
            ]
        ]);
        
        $responseBody1 = $response1->getBody()->getContents();        
        $apiResponse = json_decode($responseBody1, true);   
        
        $responseBody2 = $response2->getBody()->getContents();        
        $apiResponse1 = json_decode($responseBody2, true);   

        $responseBody = $response->getBody()->getContents();


        // $hasil['cuaca'] = $responseBody;
        // $hasil['yutub'] = $apiResponse;
        
        return view('cuaca2')->with(['cuaca' => $responseBody, 
        'yutub' => $apiResponse,
        'video' => $apiResponse1]);
        // $apiResponse = json_decode($responseBody, true);        

        // return view('cuaca2', compact("apiResponse") && compact('responseBody'));
        // return view('cuaca2', compact("responseBody"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
