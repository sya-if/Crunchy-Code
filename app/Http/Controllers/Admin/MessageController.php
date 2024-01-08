<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class MessageController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin\message', compact('contacts'));
    }

    public function showReplyForm(Contact $contact){
        return view('admin.response', compact('contact'));
    }

    public function storeReply(Request $request, Contact $contact)
    {
        // Validate the form data
        $request->validate([
            'reply' => 'required|string',
        ]);

        // Save the reply to the database
        $contact->update([
            'reply' => $request->input('reply'),
        ]);

        return redirect()->route('message')->with('success', 'Reply sent successfully');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
            return redirect()->back()->with('success', 'Message has been deleted successfully');
        }

        return redirect()->back()->with('error', 'Message not found');
    }

}
