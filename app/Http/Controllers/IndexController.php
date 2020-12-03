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

        if ( ! Newsletter::isSubscribed($request->user_email) ) // membuat pengguna berlangganan ke daftar MailChimp
        {
            Newsletter::subscribePending($request->user_email); // menetapkan status pengguna yang 'tertunda' dalam daftar MailChimp untuk menunggu konfirmasi.

            return redirect('/')->with('success','Check your email for next steps!');

        }
        return redirect('/')->with('failed','Sorry you are already subscribed buddy!');
    }
}
