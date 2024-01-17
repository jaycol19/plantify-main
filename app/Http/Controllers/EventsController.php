<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        // Retrieve events from your database
        $events = Event::select(['id', 'title', 'start_date as start', 'end_date as end'])->get();
    
        // If the request expects JSON, return a JSON response
        if (request()->expectsJson()) {
            return response()->json($events, 200);
        }
    
        // If it's a regular request, render the Blade view
        return view("pages.eventscalendar", ['events' => $events]);
    }
    
        
        public function create(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:55',
            'start_date' => 'required|string|max:55',
            'location' => 'required|string|max:55',
            'description' => 'required|string|max:55',
        ]);
    
        $event = Event::create([
            'title' => $data['title'],
            'start_date' => $data['start_date'],
            'end_date' => 1,
            'location' => $data['location'],
            'description' => $data['description'],
            'status' => 1
        ]);
    
        return response()->json(['event' => $event], 200);
    }
    
    
        public function update(Request $request, $id)
        {
    
            $event = Event::findOrFail($id);
    
            $data = $request->validate([
                'title' => 'required|string|max:55',
                'start_date' => 'required|string|max:55',
                'location' => 'required|string|max:55',
                'description' => 'required|string|max:55',
            ]);
            $event->update([
                'title' => $data['title'],
                'start_date' => $data['start_date'],
                'location' => $data['location'],
                'description' => $data['description'],
            ]);
    
            return response()->json(['event' => $event], 200);
        }
    
    
        public function destroy($id)
        {
            // Delete an event from your database
            $event =Event::findOrFail($id);
            $event->delete();
            return response()->json(null, 204);
        }
}
