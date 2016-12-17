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

    public function usfw()
    {
        $ibada = Service::orderBy('id', 'DESC')->take(3)->get();
        //dd($ibada);
        return view('admin.usfw', compact('ibada'));
    }

    public function yfp()
    {
        $ibada = Service::orderBy('id', 'DESC')->take(3)->get();
        //dd($ibada);
        return view('admin.yfp', compact('ibada'));
    }

    public function social()
    {
        $ibada = Service::orderBy('id', 'DESC')->take(3)->get();
        //dd($ibada);
        return view('admin.social', compact('ibada'));
    }

    public function ushers()
    {
        $ibada = Service::orderBy('id', 'DESC')->take(3)->get();
        //dd($ibada);
        return view('admin.ushers', compact('ibada'));
    }

    public function sunday()
    {
        $ibada = Service::orderBy('id', 'DESC')->take(3)->get();
        //dd($ibada);
        return view('admin.sunday', compact('ibada'));
    }
}
