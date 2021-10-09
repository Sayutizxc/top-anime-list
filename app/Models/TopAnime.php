<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopAnime extends Model
{
    use HasFactory;

    static function getTopAnime($page)
    {
        $response = Http::acceptJson()->get("https://api.jikan.moe/v3/top/anime/$page");
        return $response;
    }
}
