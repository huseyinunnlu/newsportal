<?php

namespace App\Http\Controllers;

use App\Http\Request as HttpRequest; 
use Illuminate\Support\Facades\Input; 
use Request; 
use DB; 
use Session;


class adminController extends Controller
{
	//auth
	public function __construct() {
		$this->middleware('auth');
	}

	public function index() {
		return view('adminpanel.index');
	}

	public function category() {

		$data = DB::table('categories')->get();
		return view('adminpanel.categories.category',['data'=>$data]);
	}

	public function editCategory($id) {
		$singledata= DB::table('categories')->where('id',$id)->first();
		if($singledata == NULL){
			return redirect('adminpanel/category');
		}
		$data = DB::table('categories')->get();
		return view('adminpanel.categories.editcategory',['data'=>$data,'singledata'=>$singledata]);
	}

	public function multipleDelete() {
		$data=Request::except('_token');
		if($data['bulk-action']== 0) {
			session::flash('message','Please select action you want to perform');
			return redirect()->back();
		}
		$tbl = decrypt($data['tbl']);
		$tblid = decrypt($data['tblid']);
		if(empty($data['select-data'])) {
			session::flash('message','Please select data you want to delete');
			return redirect()->back();
		}
		$ids=$data['select-data'];
		foreach ($ids as $id) {
			DB::table($tbl)->where($tblid,$id)->delete();
		}
		session::flash('message','Data deleted Succesfuly');
		return redirect()->back();
	}

	public function settings () {
		$data = DB::table('settings')->first();

		if($data) {
			$data->social = explode(',', $data->social);

		}

		return view('adminpanel.settings', ['data'=>$data]);
	}

	public function addPost() {
		$categories = DB::table('categories')->get();
		return view('adminpanel/posts/add-post',['categories'=>$categories]);
	}

	public function allPosts() {

		$posts = DB::table('posts')->paginate(20);//paginate sayfata ne kadar gözükecek onu belirlemek için
		foreach ($posts as $post) { // sayı halinde olan category numaralarını yazıya çevirme
			$categories = explode(',', $post->category_id);
			foreach ($categories as $cat) {
				$postcat = DB::table('categories')->where('id',$cat)->value('title');
				$postcategories[] = $postcat;
				$postcat = implode(', ', $postcategories);
			}
			$post->category_id = $postcat;
			$postcategories=[];
		}

		
		$published = DB::table('posts')->where('status','publish')->count();
		return view('adminpanel/posts/all-posts',['posts'=>$posts,'published'=>$published]);
	}

	public function editPost($id) {
		$data = DB::table('posts')->where('id',$id)->first();
		$postcat = explode(', ',$data->category_id);
		$categories = DB::table('categories')->get();
		return view('adminpanel/posts/edit-post',['data'=>$data,'categories' => $categories,'postcat'=>$postcat]);
	}

	public function addPage() {
		return view('adminpanel/pages/add-page');
	}

	public function allPages() {

		$posts = DB::table('pages')->get();
		$published = DB::table('posts')->where('status','publish')->count();
		return view('adminpanel/pages/all-pages',['posts'=>$posts,'published'=>$published]);
	}

	public function editPage($id) {
		$data = DB::table('pages')->where('id',$id)->first();
		return view('adminpanel/pages/edit-page',['data'=>$data]);
	}

	public function allMessages() {
		$data = DB::table('messages')->orderby('id','DESC')->paginate(20);
		return view('adminpanel/all-messages',['data'=>$data]);
	}

	public function addAds() {
		return view('adminpanel/ads/add-ads');
	}

		public function allAds() {
		$ads = DB::table('reklams')->orderby('id','DESC')->paginate(20);
		$published = DB::table('reklams')->where('status','display')->count();
		return view('adminpanel/ads/all-ads',['ads'=>$ads,'published'=>$published]);
	}

	public function editAds($id) {
		$data = DB::table('reklams')->where('id',$id)->first();
		return view('adminpanel/ads/edit-ads',['data'=>$data]);
	}
}
