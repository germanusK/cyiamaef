<?php

namespace App\Http\Controllers\Reserved;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(Request $request){
        $data['categories'] = Category::count();
        $data['projects'] = Project::count();
        $data['events'] = Event::count();
        $data['posts'] = Post::count();
        return view('dash.home', $data);
    }
    
    //
    public function categories(Request $request, $id = null){
        $data['title'] = "Categories";
        if($id != null){
            $category = Category::find($id);
            $data['category'] = $category;
            $data['title'] = "Edit Category &Rang; {$category->title}";
        }
        $data['categories'] = Category::orderBy('created_at', 'DESC')->paginate(24);
        return view('dash.categories.index', $data);
    }
    
    //
    public function category_posts(Request $request, $id){
        $category = Category::find($id);
        $data['title'] = "Posts &Lang; {$category->title}";
        $data['category'] = $category;
        $data['posts'] = Post::where('category_id', $category->id)->orderBy('created_at', 'DESC')->paginate(24);
        return view('dash.blog.index', $data);
    }
    
    //
    public function save_category(Request $request, $id=null){
        $request->validate(['title'=>'required']);
        $category = new Category();
        if($id != null){$category = Category::find($id);}
        $category->fill($request->all());
        $category->save();
        session()->flash('success', "Category successfully saved");
        return redirect()->route('reserved.categories');
    }
    
    //
    public function delete_category(Request $request, $id){
        if(($cat = Category::find($id)) != null){
            $cat->delete();
            session()->flash('success', "Operation completed successfully");
        }else{session()->flash('error', "No category was found with the given category ID");}
        return redirect()->route('reserved.categories');
    }
    
}
