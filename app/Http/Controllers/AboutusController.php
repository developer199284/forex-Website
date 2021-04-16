<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('frontend.about-us',[
            
        ]);
    }

    public function Mission(Request $request)
    {
        return view('frontend.Mission',[
            
        ]);
    }

    public function Values(Request $request)
    {
        return view('frontend.Values',[
            
        ]);
    }

    public function Trade(Request $request)
    {
        return view('frontend.Trade',[
            
        ]);
    }








    public function news(Request $request)
    {
        return view('frontend.news',[
            
        ]);
    }

    public function download(Request $request)
    {
        return view('frontend.download',[
            
        ]);
    }

    public function metaTrader(Request $request)
    {
        return view('frontend.metaTrader',[
            
        ]);
    }

    public function contact(Request $request)
    {
        return view('frontend.contact',[
            
        ]);
    }

    public function finance(Request $request)
    {
        return view('frontend.finance',[
            
        ]);
    }

}
