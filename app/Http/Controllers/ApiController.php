<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function unauthenticated()
    {
        return response()->json([
            "message" => "Not Authorized"
        ]);
    }
}
