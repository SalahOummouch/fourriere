<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use App\Mail\VehiculeEnFourriereNotification;
use App\Models\Plaque;


class ContactController extends Controller
{
    public function sendEmail()
    {
        $plaque = Plaque::find(1);
        Mail::to("s.oummouch@enim.ac.ma")->send(new VehiculeEnFourriereNotification($plaque));
        Mail::to("alexandre.collot@europe-convoyage.com")->send(new VehiculeEnFourriereNotification($plaque));
        


        
    }
}
