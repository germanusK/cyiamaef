<?php

namespace App\Http\Controllers\Reserved;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    
    //
    public function events(Request $request, $id=null) {
        if($id != null){
            $event = Event::find($id);
            $data['event'] = $event;
            $data['related_events'] = Event::where('project_id', $event->project_id)->orderBy('created_at', 'DESC')->take(12)->get();
            return view('dash.events.show', $data);
        }
        $data['title'] = "Events";
        $data['events'] = Event::orderBy('created_at', 'DESC')->paginate(24);
        return view('dash.events.index', $data);
    }

    //
    public function create_event(Request $request, $id=null) {
        $data['title'] = "Create Event";
        $data['project_id'] = $request->project_id;
        $data['projects'] = Project::orderBy('title')->get();
        if($id != null){
            $event = Event::find($id);
            $data['event'] = $event;
            $data['title'] = "Edit Event &Rang; {$event->title}";
            return view('dash.events.create', $data);
        }
        return view('dash.events.create', $data);
    }

    //
    public function save_event(Request $request, $id=null) {
        // dd($request->all());
        $request->validate(['title'=>'required', 'set_time'=>'required|date']);

        $event = new Event();
        if($id != null){$event = Event::find($id);}
        $event->fill($request->all());

        if(($file = $request->file('file')) != null){
            $filename = "featured_image_".str_ireplace(' ', '_', strtolower($request->title)).'_'.time().'.'.$file->getClientOriginalExtension();
            if(($url = $file->storeAs('events', $filename, ['disk'=>'public_uploads']))){
                $filepath = asset('uploads/'.$url);
                if(file_exists($event->featured_image)){
                    $filename = pathinfo($event->featured_image, PATHINFO_BASENAME);
                    unlink(public_path('uploads/events/'.$filename));
                }
                $event->featured_image = $filepath;
            }
        }
        $event->save();
        session()->flash('success', "Event successfully saved.");
        return redirect()->route('reserved.events');
    }

    //
    public function delete_event(Request $request, $id) {
        if(($event = Event::find($id)) != null){
            if($event->featured_image != null){
                $filename = pathinfo($event->featured_image, PATHINFO_BASENAME);
                unlink(public_path('uploads/events/'.$filename));
            }
            $event->delete();
            session()->flash('success', "Event deleted successfully");
        }
        session()->flash('error', "No event was found with the given event ID");
        return redirect()->route('reserved.events');
    }
}
