<?php

namespace App\Http\Controllers\Open;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\Event;
use App\Models\EventImage;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Rfc4122\UuidV2;
use SevenGps\PayUnit;

class HomeController extends Controller
{
    //
    public function home(Request $request) {
        $data['posts'] = Post::where('published', 1)->orderBy('created_at', 'DESC')->take(3)->get();
        $data['projects'] = Project::orderBy('id', 'DESC')->take(6)->get();
        $data['events'] = Event::where('published', 1)->orderBy('created_at', 'DESC')->take(3)->get();
        $data['images'] = EventImage::inRandomOrder()->take(12)->get();
        return view('public.index', $data);
    }
    
    //
    public function about(Request $request) {
        return view('public.about');
    }
    
    //
    public function gallery(Request $request) {
        $data['images'] = EventImage::inRandomOrder()->take(24)->get();
        return view('public.gallery', $data);
    }
    
    //
    public function contact(Request $request) {
        return view('public.contact');
    }
    
    //
    public function projects(Request $request, $id=null) {
        if($id != null){
            $project = Project::find($id);
            $data['project'] = $project;
            $data['events'] = $project->events()->orderBy('id', 'DESC')->take(12)->get();
            return view('public.project', $data);
        }
        $data['projects'] = Project::where('published', 1)->orderBy('created_at', 'DESC')->paginate(12);
        return view('public.projects', $data);
    }
    
    //
    public function events(Request $request, $id=null) {
        $data['events'] = Event::where('published', 1)->orderBy('created_at', 'DESC')->paginate(12);
        if($id != null){$data['event'] = Event::find($id);}
        return view('public.event', $data);
    }
    
    //
    public function blog(Request $request, $id = null) {
        $data['posts'] = Post::where('published', 1)->orderBy('created_at', 'DESC')->paginate(12);
        if($id != null){
            $data['post'] = Post::find($id);
            $data['posts'] = Post::where('published', 1)->whereNot('id', $id)->orderBy('created_at', 'DESC')->paginate(12);
            return view('public.blog-single', $data);
        }
        return view('public.blog', $data);
    }
    
    //
    public function email(Request $request) {
        
    }

    public function make_donation(Request $request){
        return view('public.donate');
    }

    public function donate(Request $request){
        $validity = Validator::make($request->all(), ['amount'=>'required|integer', 'currency'=>'required']);
        if($validity->fails()){
            return redirect()->back()->withErrors($validity)->withInput();
        }
        try {
            //code...
            DB::beginTransaction();
            $donation_data = ['name'=>$request->name, 'email'=>$request->email, 'amount'=>$request->amount, 'transaction_id' => uniqid(), 'transaction_ref'=>UuidV2::uuid4()];
    
            $api_key = config('payunit.apiKey');
            $api_user = config('payunit.apiUser');
            $api_password = config('payunit.apiPassword');
            $return_url = 'https://google.com';
            $notify_url = 'https://google.com';
            // $return_url = route('donation.return_url');
            // $notify_url = route('donation.notify_url');
            $mode = 'live';
            $description = 'Donation payment for CYIAMAEF';
            $purchase_ref = $donation_data['transaction_ref'];
            $currency = $request->currency;
            $name = config('payunit.merchantName');
            $transaction_id = $donation_data['transaction_id'];
            $payunit = new Payunit(
                $api_key, 
                $api_password, 
                $api_user, 
                $return_url, 
                $notify_url, 
                $mode, 
                $description, 
                $purchase_ref, 
                $currency, 
                $name, 
                $transaction_id
            );
    
            // Donation::create($donation_data);
            $payunit->makePayment($request->amount);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

    }

    public function donation_notify(Request $request) {
        $data = [
            'transaction_id' => $request->transaction_id,
            'transaction_status' => $request->transaction_status,
            'transaction_amount' => $request->transaction_amount,
            'message' => $request->message,
            'error' => $request->error
        ];
    }
}
