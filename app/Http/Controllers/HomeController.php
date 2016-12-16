<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ibada = Service::orderBy('id', 'DESC')->take(3)->get();
        //dd($ibada);
        return view('newhome', compact('ibada'));
    }

    public function quakers()
    {
        $ibada = Service::orderBy('id', 'DESC')->take(3)->get();
        //dd($ibada);
        return view('admin.quaker', compact('ibada'));
    }
}
