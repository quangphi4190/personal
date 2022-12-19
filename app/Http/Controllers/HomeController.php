<?php

namespace App\Http\Controllers;

use App\Category;
use App\Validators\NewsValidator;
use Illuminate\Http\Request;
use  App\Banner;
use  App\News;
use  App\Contact;
use  App\Content;
use  App\System;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $info =  Content::first();
        $pageTitle = $info->tencongty;
        $data_system = getDataSystem();
        return view('frontEnd.home.index',compact('pageTitle','data_system','info'));
    }
    public function contact (){
        $pageTitle ='Liên hệ';
        $lienhe = Contact::first();
        $info =  Content::first();
        return view('frontEnd.home.contact',compact('pageTitle','lienhe','info'));

    }
    public function gioi_thieu (){
        $pageTitle ='Giới thiệu';
        $content = News::where('category_id',1)->first();
        $info =  Content::first();
        $data_system = getDataSystem();

        return view('frontEnd.home.gioithieu',compact('pageTitle','content','info','data_system'));

    }
    public function sanpham (){
        $pageTitle ='Sản phẩm';
        $products = News::where('category_id',3)->orderBy('created_at','desc')->paginate(12);
        $info =  Content::first();

        return view('frontEnd.home.products',compact('pageTitle','products','info'));

    }
    public function giaiphap (){
        $pageTitle ='Giải pháp';
        $content = News::where('category_id',6)->first();
        $info =  Content::first();

        $data_system = getDataSystem();
        $thanhphanhethongs = System::orderBy('order','asc')->limit(6)->get();
        return view('frontEnd.home.giaiphap',compact('pageTitle','content','info','thanhphanhethongs','data_system'));

    }
   /*
    public function cloudserver (){
        $pageTitle ='Cloud Server';
        return view('frontEnd.home.cloud-server',compact('pageTitle'));

    }
    public function affiliate (){
        $pageTitle ='Liên kết';
        $content = News::where('category_id',1)->first();
        $info =  Content::first();
        return view('frontEnd.home.affiliate',compact('pageTitle','content','info'));

    }
    public function pricing (){
        $pageTitle ='Bảng giá';
        $content = News::where('category_id',1)->first();
        $info =  Content::first();
        return view('frontEnd.home.pricing',compact('pageTitle','content','info'));

    }
    public function giaiphap (){
        $pageTitle ='Giải pháp';
        $content = News::where('category_id',1)->first();
        $info =  Content::first();
        return view('frontEnd.home.giaiphap',compact('pageTitle','content','info'));

    }
    public function bang_gia (){
        $pageTitle ='Bảng giá';
        $content = News::where('category_id',16)->first();
        $info =  Content::first();
        return view('frontEnd.home.noi-dung',compact('pageTitle','content','info'));

    }*/

    public function tintuc(){
        $news = News::where('category_id',18)->orderBy('created_at','desc')->paginate(9);
        $pageTitle = 'Tin tức';
        $categories = Category::where('status',1)->orderBy('created_at','desc')->get();
        $info =  Content::first();
        return view('frontEnd.home.tin-tuc',compact('pageTitle','news','categories','info'));

    }

    public function dichvu(){
        $content = News::where('category_id',17)->first();
        $pageTitle = 'Dịch vụ';
        $categories = Category::where('status',1)->orderBy('created_at','desc')->get();
        $info =  Content::first();
        return view('frontEnd.home.noi-dung',compact('pageTitle','content','categories','info'));

    }
    public function danh_muc ($slug){
        $categorie = Category::where('slug',$slug)->orderBy('created_at','desc')->first();
        $news = News::where('category_id',$categorie['id'])->orderBy('created_at','desc')->paginate(10);
        $pageTitle = $categorie['name'];
        $categories = Category::where('status',1)->orderBy('created_at','desc')->get();
        $info =  Content::first();
        return view('frontEnd.home.new-event',compact('slug','pageTitle','news','categories','info'));

    }
    public function chi_tiet_bai_viet($slug){
        $news = News::where('slug', $slug)->with('category:id,name,slug')->orderBy('created_at','desc')->firstOrFail();
        $pageTitle = $news['name'];
        $info =  Content::first();
        if($news->category_id == 1){
            $tinkhacs = News::whereNotIn('id',[$news->id])->where('category_id',1)->orderBy('created_at','desc')->limit(4)->get();
            return view('frontEnd.home.chi-tiet-tin-tuc',compact('pageTitle','tinkhacs','news','info'));

        }else {
            $tinkhacs = News::whereNotIn('id',[$news->id])->orderBy('created_at','desc')->limit(4)->get();
            return view('frontEnd.home.chi-tiet-bai-viet',compact('pageTitle','tinkhacs','news','info'));
        }

    }
    public function tintucchitiet($slug){
        $new = News::where('slug', $slug)->with('category:id,name,slug')->orderBy('created_at','desc')->firstOrFail();
        $tinnoibat = News::where('feature',1)->limit(8)->orderBy('created_at','desc')->get();
        $pageTitle = $new['name'];
        $categories = Category::where('status',1)->orderBy('created_at','desc')->get();
        $tinkhacs = News::whereNotIn('id',[$new->id])->where('category_id',18)->orderBy('created_at','desc')->limit(4)->get();
        $info =  Content::first();
        return view('frontEnd.home.chi-tiet-tin-tuc',compact('pageTitle','tinkhacs','new','categories','tinnoibat','info'));

    }
    public function bai_viet($id){
        $news = Banner::select('*','title as name','description as content')->where('id', $id)->firstOrFail();
        $tinnoibat = News::where('feature',1)->orderBy('created_at','desc')->limit(8)->get();
        $pageTitle = $news->title;
        $categories = Category::where('status',1)->orderBy('created_at','desc')->get();
        $tinkhacs = News::limit(3)->orderBy('created_at','desc')->get();
        $info =  Content::first();
        return view('frontEnd.home.banner-chi-tiet-bai-viet',compact('pageTitle','tinkhacs','news','categories','tinnoibat','info'));

    }
    public function form_lien_he (Request $request){
        $pageTitle = 'Liên hệ';

        $data = $request->all();
        $check = Contact::where('phone',$data['phone'])->where('status',1)->first();
        if($check) {
            return redirect()->back()->with('status_warning', 'Thông tin đang được xử lý.');
        }else {

            $dkthi = Contact::create([
                'title' => isset($data['title']) ? $data['title'] : '',
                'phone' => isset($data['phone']) ? $data['phone'] : '',
                'email' => isset($data['email']) ? $data['email'] : '',
                'name' => isset($data['name']) ? $data['name'] : '',
                'message' => isset($data['message']) ? $data['message'] : '',
                'status' => 1
            ]);
            if($dkthi->save()) {
                return redirect()->back()->with('message', 'Gửi thông tin liên hệ thành công!');
            }else {
                return redirect()->back()->with('status_warning', 'Gửi thông tin liên hệ  thất bại');
            }
        }

    }
}
