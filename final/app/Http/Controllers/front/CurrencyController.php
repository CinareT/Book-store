<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    public function index(Request $request)
    {
        $userIp = $request->ip();
        dd($userIp);

        $response = Http::get('https://api.freecurrencyapi.com/v1/latest?apikey=fca_live_5GdZemlCex1lfhTCWWk9QU5nULDvpccxD09pFmA6');
    
        $jsonData = $response->json();
        dd($jsonData);
    }
}
