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
        \Log::info('send email :: '.json_encode($jsonData));
        $fromAddress = 'contact@decennale-express.fr';
        Mail::to('mrbadrjeddab@gmail.com')->send(new ContactMail($jsonData, $fromAddress));

        return response()->json(['message' => 'Email sent successfully!']);
    }
}
