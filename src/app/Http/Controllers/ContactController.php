<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function index()
    {
    return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name','last_name','gender', 'email', 'first','second', 'third','address','building','detail','content']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name','last_name','gender', 'email', 'first','second', 'third','address','building','detail','content']);
            Contact::create($contact);
                return view('thanks');
    }
}

