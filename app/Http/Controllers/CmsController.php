<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Service;
use App\Event;

class CmsController extends Controller
{
    public function index(){
        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();
        return view('cms.addservice', compact('ibada', 'event'));
    }
    public function addevent(){
        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();
        return view('cms.addevent', compact('ibada', 'event'));
    }
    public function addingservice(Request $request){
        $service = new Service($request->all());
        //dd($request->all());
        $service->save();

        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();

        return redirect()->route('add-service')
            ->with('status', 'Service added Successfully')
            ->with('ibada', $ibada)
            ->with('event', $event);


    }
    public function addingevent(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'type' => 'required',
            'image'=>'mimes:jpeg,jpg,png,gif|required|max:10000'

        ]);

        $file = Input::file('image');//$request->file('contentzip');

        list($width, $height) = getimagesize(Input::file('image'));
        //dd($width);
        //if (Input::file('image') == null)
        //  $this->validate($request, ['image' => 'required']);
        //dd($file);
        $originname= $file->getClientOriginalName();

        $filename = pathinfo($originname, PATHINFO_FILENAME);
        $extension = pathinfo($originname, PATHINFO_EXTENSION);
        $name = $filename.'.'.time().'.' . $extension;

        $size = $file->getSize();
        //dd($size);
        Input::file('image')->move(public_path() . '/eventimages/', $name);


        Event::create(array(
            'title'=>Input::get('title'),
            'type'=>Input::get('type'),
            'image'=>$name,
            'content'=>Input::get('text'),

        ));
        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();

        return redirect()->route('add-event')
            ->with('status', 'Event added Successfully')
            ->with('ibada', $ibada)
            ->with('event', $event);
    }
    public function serviceindex(){
        $currentservice = Service::orderBy('date', 'DESC')->take(1)->get();
        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();
        //dd($currentservice[0]->id);
        $allservices = Service::orderBy('id', 'DESC')->paginate(5);
        //dd($allservices);
        return view('services.home', compact('currentservice', 'allservices', 'ibada', 'event'));
    }

    public function events(){

        $events = Event::orderBy('id', 'DESC')->paginate(5);
        //dd($events[0]);

        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();
        return view('events.index', compact('ibada', 'events', 'event'));
    }
    public function fullevent($id){
        $value = Event::findorFail($id);
        $event = Event::orderBy('id', 'DESC')->take(2)->get();
        $ibada = Service::orderBy('id', 'DESC')->take(2)->get();
        return view('events.fullevent', compact('value', 'ibada', 'event'));
    }
}
