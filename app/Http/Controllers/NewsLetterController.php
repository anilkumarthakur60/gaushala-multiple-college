<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsLetterRequest;
use App\Http\Requests\UpdateNewsLetterRequest;
use App\Models\NewsLetter;

class NewsLetterController extends Controller
{

    public function index()
    {

        return view('backend.news-letters.index');
    }

    public function destroy(NewsLetter $newsLetter)
    {
        //
    }
}
