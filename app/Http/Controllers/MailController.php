<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

class MailController extends Controller
{
    public function sendForm(Request $request)
    {
        $data = $request->all();

        session_start();

        if ($_SESSION['captcha'] !== $request->captcha) {
            abort(481);
            return Redirect::back()->withErrors(array('captcha_error' => 'Captcha wrong'));
        }
        
        Mail::send('mail.contact', [
            'address' => $data['address'],
            'email' => $data['email'],
            'company' => $data['company'],
            'phone' => $data['phone'],
            'content' => $data['content'],
            'concern' => $data['concern'],
            'gender' => $data['gender'],
            'name' => $data['name'],
        ], function($message) use ($data) {
            $message->to([ $data['email'], env('MAIL_USERNAME'), 'vincent7697@gmail.com' ])->subject('上海葡萄王 客戶詢問');
            $message->from(env('MAIL_USERNAME'), $name = env('APP_NAME'));
        });

        return redirect('/');
    }
}
