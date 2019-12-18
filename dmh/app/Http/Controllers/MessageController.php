<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(){
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3',
        ]);
        Mail::to('irving6258@gmail.com')->queue(new MessageReceived($message));
        return 'Mensaje enviado';
    }
}
