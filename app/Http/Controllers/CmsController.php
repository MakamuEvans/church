<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Service;

class CmsController extends Controller
{
    public function index(){
        $ibada = Service::orderBy('id', 'DESC')->take(3)->get();
        return view('cms.addservice', compact('ibada'));
    }
    public function addingservice(Request $request){
        $service = new Service($request->all());
        //dd($request->all());
        $service->save();

        $ibada = Service::orderBy('id', 'DESC')->take(3)->get();

        return redirect()->route('add-service')
            ->with('status', 'Service added Successfully')
            ->with('ibada', $ibada);


    }
    public function serviceindex(){
        $currentservice = Service::orderBy('id', 'DESC')->take(1)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(3)->get();
        //dd($currentservice[0]->id);
        $allservices = Service::orderBy('id', 'DESC')->paginate(5);
        //dd($allservices);
        return view('services.home', compact('currentservice', 'allservices', 'ibada'));
    }
}
