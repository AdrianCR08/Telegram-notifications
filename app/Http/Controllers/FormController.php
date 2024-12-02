<?php

namespace App\Http\Controllers;

use App\Notifications\ExampleNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;


class FormController extends Controller
{
    public function submit(Request $request)
    {
       $name = $request->input('name');
       $email = $request->input('email');
       $message = $request->input('message');
       Notification::route('telegram', '1535523266')->notify(new ExampleNotification($name, $email, $message));
       return redirect()->back()->with('success', 'Notification sent!');
    }
}
