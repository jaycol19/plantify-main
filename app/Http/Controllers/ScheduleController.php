<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

use Illuminate\Support\Facades\DB;
class ScheduleController extends Controller
{
    //
    public function index()
    {
        $schedules = DB::table('schedules')->orderBy('id', 'DESC')->get();
        return view('pages.eventscalendar',['schedules'=>$schedules]);
    }

    public function create(Request $request)
    {
        $item = new Schedule();
        $item->title = $request->title;
        $item->start = $request->start;
        $item->end = $request->end;
        $item->location = $request->location;
        $item->description = $request->description;
        $item->save();

        return redirect('/fullcalendar');
    }
	
	
    public function getEvents()
    {
        $schedules = Schedule::all();
        return response()->json($schedules);
		
    }
	
  
    public function deleteEvent(Request $request, $id)
    {
        $schedule = Schedule::find($request->id)->delete();
        return response()->json($schedule);
    }

    public function update(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);

        $schedule->update([
            'start' => Carbon::parse($request->input('start_date'))->setTimezone('UTC'),
            'end' => Carbon::parse($request->input('end_date'))->setTimezone('UTC'),
        ]);

        return response()->json(['message' => 'Event moved successfully']);
    }

    public function resize(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);

        $newEndDate = Carbon::parse($request->input('end_date'))->setTimezone('UTC');
        $schedule->update(['end' => $newEndDate]);

        return response()->json(['message' => 'Event resized successfully.']);
    }

    public function search(Request $request)
    {
        $searchKeywords = $request->input('title');

        $matchingEvents = Schedule::where('title', 'like', '%' . $searchKeywords . '%')->get();

        return response()->json($matchingEvents);
    }

	
}
