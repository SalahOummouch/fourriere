<?php

namespace App\Http\Controllers\Modules;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        return view('module.chat.index');
    }
}
