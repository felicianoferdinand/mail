<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MainController extends Controller
{
    public function index($to, $title, $body)
    {
        $data = [
            'title' => $title,
            'body' => $body,
        ];
        // dd($data);
        Mail::send('emails.index', $data, function($message) use ($to, $title) {
            $message->to($to)
                    ->subject($title);
        });

        return response()->json(['message' => 'Email sent successfully.']);
    }
}
