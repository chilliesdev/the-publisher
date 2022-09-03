<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class Publisher extends Controller
{
    public function subscribe(Request $request, $topic)
    {
        validator($request->route()->parameters(), [
            "topic" => "required|string"
        ])->validate();

        $data = [
            "topic" => $topic,
            "data" => $request->all()
        ];

        // TODO use a queue
        // $response = Http::post('http://example.com', $data);

        // return $response;
        return $data;
    } 
}
