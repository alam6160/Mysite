<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Mail\contractmail;
use Illuminate\Support\Facades\Mail;
class contract extends Controller
{
    public function sendMail()
    {
        $details = [
            'title' => 'Mail from your Website',
            'body' => 'This is fedback'

        ];
        Mail::to("alam15-6160@diu.edu.bd")->send(new contractmail($details));
        return "Email sent";
        }

      
}

