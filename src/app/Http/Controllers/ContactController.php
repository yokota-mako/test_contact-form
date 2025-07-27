<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['sei','mei','sex', 'email', 'first','second', 'third','address','building','categories','content']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['sei','mei','sex', 'email', 'first','second', 'third','address','building','categories','content']);
    }
}

