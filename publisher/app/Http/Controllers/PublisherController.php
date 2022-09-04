<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Subscriber;

class PublisherController extends Controller
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

        $subscribers = Subscriber::all();

        foreach ($subscribers as $subscriber){
            try {
                Http::post($subscriber->url, $data);
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        return ["result" => true];
    } 
}
