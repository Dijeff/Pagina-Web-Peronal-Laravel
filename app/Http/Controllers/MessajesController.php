<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecieved;
use App\Mail\MessageRecived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessajesController extends Controller
{
    public function store(Request $request)
    {
       $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);

        Mail::to('dijefe84@gmail.com')->queue(new MessageRecieved($message));

        return 'Mensaje enviado';
    }
}
