<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Events;

class EventsController extends Controller{
    public function index(){
        return view("addEvent");
    }

    public function addEvent(Request $request){
        echo "<pre>";
        print_r($request->all());
        $event = new Events;
        $event->name=$request->name;
        $event->start_date=$request->start_date;
        $event->end_date=$request->end_date;
        $event->start_time=$request->start_time;
        $event->end_time=$request->end_time;
        $event->description=$request->description;
        $event->save(); }
    
        public function store(Request $request)
{
    // Validate and store event data
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'start_date' => 'required',
        'end_date' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'description' => 'required',
        // Add more validation rules as needed
    ]);

    Events::create($validatedData);

    // Return JSON response indicating success
    return response()->json(['success' => true]);
}
}