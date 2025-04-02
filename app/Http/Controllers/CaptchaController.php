<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Facebook\WebDriver\WebDriverBy;

class CaptchaController extends Controller
{
    public function scrapeAndSolve(Request $request){
        $response = Http::timeout(360) // Timeout de 3 minutes
            ->post('http://77.68.95.236:5000/scrape', [
                'license_plate' => $request->license_plate
            ]);

        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json(['error' => 'Erreur lors de la communication avec le service Python'], 500);
        }

    }



}
