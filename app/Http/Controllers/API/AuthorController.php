<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{

    public function authors()
    {
        return Author::all();
    }


    public function authorCreate(Request $request)
    {
        Author::create($request->all());
    }

}
