<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;


class searchController extends Controller
{
    //

    public function search(Request $request)
    {
        // Making sure the user entered a keyword.
        if($request->has('q')) {
            $posts = blog::search($request->get('q'))->get();
            return response()->json($posts);
        }
    }
}
