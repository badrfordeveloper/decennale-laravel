<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $jsonData = $request->json()->all();
        $fromAddress = 'contact@decennale-express.fr';
        Mail::to('mohamed.tajmout@gmail.com')->send(new ContactMail($jsonData, $fromAddress));

        return response()->json(['message' => 'Email sent successfully!']);
    }
}
