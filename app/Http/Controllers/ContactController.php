<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendEmail()
    {
        $data = [
            'name' => "Salah OUMMOUCH",
            'email' => "oummouch.salah@gmail.com",
            'message' => "Votre vehicule n'est pas trouver dans les fourrieres de Paris et France",
        ];
        Mail::to('destination@example.com')->send(new ContactMessage($data));

        return back()->with('success', '✅ Email envoyé avec succès.');
    }
}
