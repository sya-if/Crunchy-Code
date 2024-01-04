<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
    public function viewReply(){
        $headerContacts = Contact::all();

        return view('components\header', compact('$headerContacts'));
    }
    public function store(Request $request){
        $contact = new Contact();
        $user = Auth::user();
        
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact->subject = $request['subject'];
        $contact->message = $request['message'];
        $contact->reply = '';
        $contact->user_id = $user->id;

        $contact->save();

        return redirect()->back()->with('success', 'Message has been sent successfully, Please check your email later.');
    }
}
