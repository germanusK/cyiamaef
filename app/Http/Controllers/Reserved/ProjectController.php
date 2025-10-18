<?php

namespace App\Http\Controllers\Reserved;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    
    //
    public function projects(Request $request, $id=null) {
        if($id != null){
            $project = Project::find($id);
            $data['project'] = $project;
            $data['related'] = Project::where('category_id', $project->category_id)->orderBy('created_at', 'DESC')->take(24)->get();
            return view('dash.projects.show', $data);
        }
        $data['title'] = "Projects";
        $data['projects'] = Project::orderBy('created_at', 'DESC')->paginate(24);
        return view('dash.projects.index', $data);
    }

    //
    public function create_project(Request $request, $id=null) {
        $data['title'] = "Create Project";
        $data['category_id'] = $request->category_id;
        $data['categories'] = Category::orderBy('title')->get();
        if($id != null){
            $project = Project::find($id);
            $data['project'] = $project;
            $data['title'] = "Edit Project &Rang; {$project->title}";
            return view('dash.projects.create', $data);
        }
        return view('dash.projects.create', $data);
    }

    //
    public function save_project(Request $request, $id=null) {
        $request->validate(['title'=>'required', 'descr'=>'required']);
        $project = new Project();
        if($id != null){
            $project = Project::find($id);
        }
        $project->fill($request->all());
        $project->description = $request->descr;
        if(($file = $request->file('file')) != null){
            $filename = "featured_image_".str_ireplace(' ', '_', strtolower($request->title)).'_'.time().'.'.$file->getClientOriginalExtension();
            if(($url = $file->storeAs('projects', $filename, ['disk'=>'public_uploads']))){
                // dd($post);
                $filepath = asset('uploads/'.$url);
                if(file_exists($project->featured_image)){
                    unlink($project->featured_image);
                }
                $project->featured_image = $filepath;
            }
        }
        $project->save();
        session()->flash('success', "Project successfully saved");
        return redirect()->route('reserved.projects');
    }

    //
    public function delete_project(Request $request, $id) {
        if(($project = Project::find($id)) != null){
            if($project->featured_image != null){
                try {
                    //code...
                    Storage::delete($project->featured_image);
                    unlink($project->featured_image);
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
            $project->delete();
            session()->flash('success', "Operation completed successfully");
        }else{
            session()->flash('error', "No project was found with the given ID");
        }
        return redirect()->route('reserved.projects');
    }

    //
    public function project_events(Request $request, $id) {
        $project = Project::find($id);
        $data['title'] = "Project Events &Rang; {$project->title}";
        $data['project'] = $project;
        $data['events'] = Event::where('project_id', $id)->orderBy('created_at', 'DESC')->paginate(24);
        return view('dash.events.index', $data);
    }
}
