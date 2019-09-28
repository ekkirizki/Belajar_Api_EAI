<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class KontrolerCuaca1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $key = "883923fe26msh76fd3c5352df7d4p16ab13jsn944494e3ba5f";
        $host = "community-open-weather-map.p.rapidapi.com";
        $client = new Client();

        $response = $client->request('GET', 'https://community-open-weather-map.p.rapidapi.com/weather?',[
            'headers' => [
                'x-rapidapi-key' => $key,
                'x-rapidapi-host' => $host                
            ],[
                'query' => [
                    'q' => 'Bandung',
                    'units' => 'metric',
                    'mode' => 'html',
                    'id' => '2172797',
                    'callback' => 'test '
                ]
            ]
        ]);
        
        $responseBody = $response->getBody()->getContents();        
        // $apiResponse = json_decode($responseBody, true);        

        // return view('cuaca2', compact("apiResponse"));
        return view('cuaca1', compact("responseBody"));
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
