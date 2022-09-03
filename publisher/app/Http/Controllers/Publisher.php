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
        try {
            $response = Http::post('http://127.0.0.1:9000/api/subscribe', $data);
            return $response;
        } catch (\Throwable $th) {
            throw $th;
        }

    } 
}
