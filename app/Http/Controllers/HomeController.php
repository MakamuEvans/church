<?php

namespace App\Http\Controllers;
use App\Service;
use App\Event;
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
        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();
        //dd($ibada);
        return view('newhome', compact('ibada', 'event'));
    }

    public function quakers()
    {
        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();
        //dd($ibada);
        return view('admin.quaker', compact('ibada', 'event'));
    }

    public function usfw()
    {
        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();
        //dd($ibada);
        return view('admin.usfw', compact('ibada', 'event'));
    }

    public function yfp()
    {
        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();
        //dd($ibada);
        return view('admin.yfp', compact('ibada', 'event'));
    }

    public function social()
    {
        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();
        //dd($ibada);
        return view('admin.social', compact('ibada', 'event'));
    }

    public function ushers()
    {
        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();
        //dd($ibada);
        return view('admin.ushers', compact('ibada', 'event'));
    }

    public function sunday()
    {
        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();
        //dd($ibada);
        return view('admin.sunday', compact('ibada', 'event'));
    }
}
