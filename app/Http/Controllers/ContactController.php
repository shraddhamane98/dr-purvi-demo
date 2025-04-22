<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ContactController extends Controller
{  
    public function sendEmail(Request $request){
        $rules = [
            'first_name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required|max:255',
            'message' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
       
       
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|email',
        //     'message' => 'required',
        // ]);
       
        $data=[
            "first_name"=>$request->post('first_name'),
            "email"=>$request->post('email'),
            "phone"=>$request->post('phone'), 
            "subject"=>$request->post('subject'),
            "message"=>$request->post('message'),
        ];
        $recipient = 'shraddhanavale1998@gmail.com';
        $subject = 'Appointment Message From  Dr. Chaitali Adkar Website';    

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($recipient, $subject) {
            $message->to($recipient)
                    ->subject($subject);
        });

        return redirect()->back()->with('success', 'We have received your query. thank you');
   
        // dd($data);
        // echo "next";         
    }            
}