<?php
 
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\History; 
use App\Model\Vission;
use App\Model\Contact;
use App\Model\News_event;
use App\Model\Service;
use App\Model\About;
use App\Model\Banner;
use App\Model\Comm;
use App\Model\Chiarman;
use App\Model\Principal;
use App\Model\Post;
use App\Model\Stuff;
use App\Model\Catagory;
use App\Model\Photo;
use App\Model\Video;
use Mail;
class FrontendController extends Controller
{
    public function index(){
        $data['argents'] = Post::where('catagory_id',1)->latest()->limit(1)->get();
        $data['results'] = Post::where('catagory_id',5)->latest()->limit(6)->get();
        $data['exams'] = Post::where('catagory_id',4)->latest()->limit(6)->get();
        $data['admissions'] = Post::where('catagory_id',3)->latest()->limit(6)->get();
        $data['recents'] = Post::latest()->limit('6')->get();
        $data['events'] = Post::where('catagory_id',2)->latest()->limit(6)->get();
        $data['publishpost'] = Post::latest()->limit(1)->first();
         $data['alls'] = Post::latest()->limit(6)->get();
    	$data['logo'] = Logo::first();
    	$data['sliders'] = Slider::all();
        $data['stuffs'] = Stuff::all();
        $data['chiarmans'] = Chiarman::first();
    	$data['histories'] = History::first();
    	$data['vission'] = Vission::first();
    	$data['contact'] = Contact::first();
    	$data['news_events'] = News_event::orderBy('date','desc')->get();
        $data['services'] = Service::all();
        $data['banner'] = Banner::first();
        $data['principals'] = Principal::first();
        $data['photos'] = Photo::all();
        $data['videos'] = Video::all();
    	return view('frontend.layouts.home',$data);
    } 

     public function historyview(){
        $data['argents'] = Post::where('catagory_id',1)->limit(1)->get();
        $data['histories'] = History::first();
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contact'] = Contact::first();
        return view('frontend.single_page.history-view',$data);
    }

    public function chiarmanview(){
        $data['argents'] = Post::where('catagory_id',1)->limit(1)->get();
        $data['banner'] = Banner::first();
        $data['chiarmans'] = Chiarman::first();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contact'] = Contact::first();
        return view('frontend.single_page.chiarman-view',$data);
    }


     public function principalview(){
        $data['argents'] = Post::where('catagory_id',1)->limit(1)->get();
        $data['principals'] = Principal::first();
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contact'] = Contact::first();
       
        return view('frontend.single_page.principal-view',$data);
    }

    public function postpage($post_id){
        $data['post'] = Post::findOrFail($post_id);
        $data['argents'] = Post::where('catagory_id',1)->limit(1)->get();
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contact'] = Contact::first();
        return view('frontend.single_page.post-view',$data);
    }

      public function alladmissionview(){
        $data['argents'] = Post::where('catagory_id',1)->limit(1)->get();
        $data['admissions'] = Post::where('catagory_id',3)->latest()->get();
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contact'] = Contact::first();
        return view('frontend.single_page.post-alladmissionview',$data);
    }

      public function allexamview(){
        $data['argents'] = Post::where('catagory_id',1)->limit(1)->get();
        $data['exams'] = Post::where('catagory_id',4)->latest()->get();
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contact'] = Contact::first();
        return view('frontend.single_page.post-allexamview',$data);
    }

     public function allresultview(){
        $data['argents'] = Post::where('catagory_id',1)->limit(1)->get();
        $data['results'] = Post::where('catagory_id',5)->latest()->get();
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contact'] = Contact::first();
        return view('frontend.single_page.post-allresultview',$data);
    }

    public function allpostview(){
        $data['argents'] = Post::where('catagory_id',1)->limit(1)->get();
        $data['posts'] = Post::get();
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contact'] = Contact::first();
        return view('frontend.single_page.post-allview',$data);
    }

     public function eventallview(){
        $data['events'] = Post::where('catagory_id',2)->limit(1)->get();
        $data['argents'] = Post::where('catagory_id',1)->limit(1)->get();
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contact'] = Contact::first();
        return view('frontend.single_page.post-eventallview',$data);
    }


     public function stuffallview(){
        $data['argents'] = Post::where('catagory_id',1)->limit(1)->get();
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['stuffs'] = Stuff::all();
        $data['contact'] = Contact::first();
        return view('frontend.single_page.post-allstuffview',$data);
    }

public function photogalary(){
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['photos'] = Photo::all();
        return view('frontend.single_page.photo',$data);
    }

    public function videogalary(){
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['videos'] = Video::all();
        return view('frontend.single_page.video',$data);
}
    public function aboutus(){
        $data['banner'] = Banner::first();
    	$data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
    	return view('frontend.single_page.about-us',$data);
    }

    public function contactus(){
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
    	return view('frontend.single_page.contact-us',$data);
    }

    public function newsdetails($id){ 
        $data['banner'] = Banner::first();
    	$data['logo'] = Logo::first();
    	$data['contact'] = Contact::first();
    	$data['news'] = News_Event::find($id);
    	return view('frontend.single_page.news-details',$data);
    }

     public function ourmission(){
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['mission'] = Mission::first();
        return view('frontend.single_page.our-mission',$data);
    }
    public function ourvission(){
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['vission'] = Vission::first();
        return view('frontend.single_page.our-vission',$data);
    }
     public function ournews(){
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['news_events'] = News_Event::orderBy('date','desc')->get(); 
        return view('frontend.single_page.our-news',$data);
    }

    public function contactstore(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'mobile_no'=>'required',
            'msg'=>'required',
            'email'=>'required'

        ]);

        $con = new Comm();
        $con->name = $request->name;
        $con->email = $request->email;
        $con->mobile_no = $request->mobile_no;
        $con->address = $request->address;
        $con->msg = $request->msg;
        $con->save();

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'address' => $request->address,
            'msg' => $request->msg
        );

        \Mail::send('frontend.emails.contact',$data, function($message) use($data){
            $message->from('tcpl5158806@gmail.com','TCPL5158806 STIPEND');
            $message->to($data['email']);
            $message->subject('Magician');
        });

        return redirect()->back()->with('success','Your message has been sent..');
    }
}
