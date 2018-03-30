<?php

namespace App\Http\Controllers;

use App\HomeController;
use Illuminate\Http\Request;
use \GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $client = new Client();
      $body = $client->get('http://www.apilayer.net/api/live?access_key=fe8b5ee06dfa73aec3e513db3554d005&%20source=USD&currencies=USD,AUD,CAD,PLN,MXN&format=1')->getBody();

      $obj = json_decode($body);

        $obj->status; // failed
        $obj->errors; // mobile number is missing or not valid
        return view('index',['result'=->$obj]);

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
     * @param  \App\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function show(HomeController $homeController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeController $homeController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeController $homeController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeController $homeController)
    {
        //
    }
}
