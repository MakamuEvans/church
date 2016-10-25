<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Service;

class CmsController extends Controller
{
    public function index(){
        return view('cms.addservice');
    }
    public function addingservice(Request $request){
        $service = new Service($request->all());
        //dd($request->all());
        $service->save();

        return redirect()->route('add-service')
            ->with('status', 'Service added Successfully');


    }
    public function serviceindex(){
        $currentservice = Service::orderBy('id', 'DESC')->take(1)->get();
        //dd($currentservice[0]->id);
        $allservices = Service::orderBy('id', 'DESC')->paginate(5);
        //dd($allservices);
        return view('services.home', compact('currentservice', 'allservices'));
    }
}
