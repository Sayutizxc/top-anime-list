<?php

namespace App\Http\Controllers;

use App\Models\TopAnime;
use Illuminate\Http\Request;

class TopAnimeController extends Controller
{
    public function index($page = 1)
    {
        return view('top_anime', [
            "page" => $page,
            "topAnime" => TopAnime::getTopAnime($page)
        ]);
    }
}
