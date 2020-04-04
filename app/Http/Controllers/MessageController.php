<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        //reglas de validacion en https://laravel.com/docs/validation
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3',
        ]);

        Mail::to('carlospalanca@gmail.com')->queue(new MessageReceived($message));

        //return new MessageReceived($message);

        return back()->with('status', __('Recibimos tu mensaje, te responderemos en menos de 24h.'));
    }
}
