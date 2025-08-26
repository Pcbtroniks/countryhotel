<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\Front\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\ContactMailable;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMail(ContactRequest $request)
    {
        $data = $request->all();

        Mail::to('recepcion@countryhotel.com.mx')->send(new ContactMailable($data));

        return back()->with('success','Mensaje enviado correctamente');
    }
}
