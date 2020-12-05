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

        if ( ! Newsletter::isSubscribed($request->user_email) ) // membuat pengguna berlangganan ke daftar MailChimp
        {
            //Newsletter::subscribepending($request->user_email); //Subscribe dengan adanya konfirmasi email

            //return redirect('/')->with('success','Check your email for next steps!'); //Pesan alert

            Newsletter::subscribe($request->user_email); //Subscribe tanpa konfirmasi email

            return redirect('/')->with('success','Congratulations on your successful subscription!');

        }
        return redirect('/')->with('failed','Sorry you are already subscribed buddy!');

    }
}
