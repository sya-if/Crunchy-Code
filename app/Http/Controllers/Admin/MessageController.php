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
