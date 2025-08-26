<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    private $email;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        $this->email = config('myconfigs.email_address', 'alessandrodev33@gmail.com');
    }

    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'message' => 'required',
        ]);

        //dd($data);

        // TODO: Configurar o envio de email depois
        //Mail::form($data)
        
        Mail::to($this->email)->send(new ContactFormMail($data));

        return back()->with('success', 'Sua mensagem foi enviada com sucesso!');
    }
}
