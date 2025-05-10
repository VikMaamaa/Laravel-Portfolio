<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function Contact() {
        return view('frontend.home_all.contact');
    }//end method

    public function StoreMessage(Request $request) {
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now()

        ]);

        $notifications = array(
            'message' => 'Your Message Submitted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notifications);
    }//end method

    public function ContactMessage() {
        $contacts = Contact::latest()->get();

        return view('admin.contact.allcontact', compact('contacts'));
    }//end method

    public function DeleteMessage($id) {
        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Your Message Deleted Successfullly',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//end method
}
