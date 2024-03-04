<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokeApiController extends Controller
{
    //
    public function index(){

        $response = Http::get('https://pokeapi.co/api/v2/berry/');

         $json =  $response->json();
         $body = collect($json['results'])->sortByDesc('name')->values()->all();

        return view('pokeapi',[
            'json' => $json,
            'body' => $body
        ]);
    }
}
