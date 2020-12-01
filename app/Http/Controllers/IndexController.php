<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class IndexController extends Controller
{

    public function index(){
        return view('index');
    }

    public function store(Request $request)
    {
        // Newsletter::delete('SUBSCRIBER_EMAIL');

        if ( ! Newsletter::isSubscribed($request->user_email) )
        {
            Newsletter::subscribePending($request->user_email);
            return redirect('index')->with('status','thanks for subscription!');

        }
        return redirect('index')->with('status','you are already subscribed!');
    }
}
