<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    function search(Request $req) {
        return $req->input();
    }
}
