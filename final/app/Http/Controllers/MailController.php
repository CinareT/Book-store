<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactsData;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        ContactsData::create([
            'con_name' => $request->con_name,
            'con_email' => $request->con_email,
            'con_phone' => $request->con_phone,
            'con_message' => $request->con_message,
            'subject' => $request->subject,
        ]);

        $subject = $request->subject;
        $siteEmail = env('MAIL_FROM_ADDRESS');

        $sended = Mail::send(
            'front.mail',
            [
                'con_name' => $request->con_name,
                'con_email' => $request->con_email,
                'con_phone' => $request->con_phone,
                'con_message' => $request->con_message,
                'subject' => $request->subject
            ],
            function ($message) use ($subject, $siteEmail) {
                $message->to($siteEmail)->subject($subject);
            }
        );

        return response()->json( 'Sent message');
    }
}
