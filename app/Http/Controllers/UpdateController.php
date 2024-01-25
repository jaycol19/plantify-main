<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
class UpdateController extends Controller
{
    public function index(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = Schedule::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end', 'location', 'description']);
            return response()->json($data);
    	}
    	return view('pages.eventscalendar');
    }

    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->type == 'add')
    		{
    			$event = Schedule::create([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end,
                    'location'		=>	$request->location,
    				'description'		=>	$request->description
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'update')
    		{
    			$event = Schedule::find($request->id)->update([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end,
                    'location'		=>	$request->location,
    				'description'		=>	$request->description
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'delete')
    		{
    			$event = Schedule::find($request->id)->delete();

    			return response()->json($event);
    		}
    	}
    }
}
