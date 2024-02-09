<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Newsevent;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //INDEX
    public function index() {
        return view('frontend.home.index');
    }


    //* EVENT'S
    public function eventIndex(){
        $newsData = Newsevent::all();
        return view('frontend.events.index', compact('newsData'));
    }


    //* CONTACT 
    public function contactIndex(){
        $contactData = Contact::all();
        return view('frontend.contact.index', compact('contactData'));
    }
}
