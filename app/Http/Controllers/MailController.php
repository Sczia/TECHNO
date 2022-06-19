<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendmail()
    {
$details = [
    'title' => 'Apointment Keeper WOrld',
    'body' => 'Congratulations your appointment has been approved.  Thank you!'

];


Mail::to("krysialee023@gmail.com")->send(new TestMail($details));
return "Email Sent";
    }



    public function reply(Request $request)
    {
$details = [
 'title' => 'Message from Municipal Jail of Los Banos',
'body' => $request->input('reply')
];
Mail::to($request->input('email'))->send(new TestMail($details));
return back();

    }
}
