<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $blogs = [
            [
                "title" => "Title one",
                "body" => "This is a body text",
                "status" => 1,
            ],
            [
                "title"=> "Title two",
                "body" => "This is a body text",
                "status"=> 0,
            ],
            [
                "title"=> "Title three",
                "body"=> "This is a body text",
                "status"=> 0,
            ],
            [
                "title"=> "Title four",
                "body"=> "This is a body text",
                "status"=> 0,
            ]
        ];

        return view("home", compact("blogs"));
    }
}
