<?php

namespace App\Http\Controllers\Reserved;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    //

    public function blog(Request $request, $id=null) {
        if($id != null){
            $post = Post::find($id);
            $data['post'] = $post;
            $data['related_posts'] = Post::where('category_id', $post->category_id)->orderBy('created_at', 'DESC')->take(12)->get();
            return view('dash.blog.show', $data);
        }
        $data['title'] = "Blog";
        $data['posts'] = Post::orderBy('created_at', 'DESC')->paginate(24);
        return view('dash.blog.index', $data);
    }
    //

    public function create_blog(Request $request, $id=null) {
        $data['title'] = "Create Post";
        $data['categories'] = Category::orderBy('title')->get();
        $data['categoty'] = $request->category;
        if($id != null){
            $post = Post::find($id);
            $data['title'] = "Edit Post &Rang; {$post->title}";
            $data['post'] = $post;
            return view('dash.blog.create', $data);
        }
        return view('dash.blog.create', $data);
    }
    //

    public function save_blog(Request $request, $id=null) {
        // dd($request->all());
        $validity = validator()->make($request->all(), ['title'=>'required', 'descr'=>'required', 'category_id'=>'required']);
        if($validity->fails()){
            session()->flash('error', $validity->errors()->first());
            return back();
        }
        $post = new Post();
        if($id != null){
            $post = Post::find($id);
        }
        $post->fill($request->all());
        $post->description = $request->descr;
        if(($file = $request->file('file')) != null){
            $filename = "featured_image_".str_ireplace(' ', '_', strtolower($request->title)).'_'.time().'.'.$file->getClientOriginalExtension();
            if(($url = $file->storeAs('blog', $filename, ['disk'=>'public_uploads']))){
                // dd($post);
                $filepath = asset('uploads/'.$url);
                if(file_exists($post->featured_image)){
                    unlink($post->featured_image);
                }
                $post->featured_image = $filepath;
            }
        }
        $post->save();
        session()->flash('success', "Post successfully saved");
        return redirect()->route('reserved.blog');
    }
    //

    public function delete_blog(Request $request, $id) {
        if(($post = Post::find($id)) != null){
            if($post->featured_image != null){
                try {
                    //code...
                    Storage::delete($post->featured_image);
                    unlink($post->featured_image);
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
            $post->delete();
            session()->flash('success', "Post deleted successfully");
        }else{
            session()->flash('error', "No post was found with the given post ID.");
        }
        return back();
    }

    public function toggle_publishing(Request $request, $id) {
        if(($post = Post::find($id)) instanceof Post){
            $post->published = $post->published == 1 ? 0 : 1;
            $post->save();
            return back()->with('success', "Operation Complete");
        }
        return back()->with("error", "Post not found");
    }
}
