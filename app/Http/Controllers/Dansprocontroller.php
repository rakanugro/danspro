<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class Dansprocontroller extends Controller
{
    //

    public function index()
    {
    	//return view('getapi');

    	$data = http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json')->json();

    	return view('getapi',['data' => $data ]);

    }

    public function getDetail($id)
    {

    	$data = http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json')->json($id);

    	return view('getdetail',['data' => $data]);
    }
}
