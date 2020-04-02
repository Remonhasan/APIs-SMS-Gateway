<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
     public function sendsms(Request $request)
    {
        
    // return $request;
        Nexmo::message()->send([
            'to' => '88' . $request->mobile,
            'from' => '16105552344',
            'text' => 'hi this is remon hasan text bot, he build it to inform all updates of uap info for cse batch-41 during covid-19,stay home and stay safe.'
        ]);

        Session::flash('success', 'Message sent');
        return redirect('/smsform');
    }
}
