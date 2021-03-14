<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class frontController extends Controller
{

	public function __construct() {
		$categories = DB::table('categories')->where('status','on')->get();
		$settings = DB::table('settings')->first();
		if($settings) {
			$settings->social = explode(',', $settings->social);
			foreach ($settings->social as $social) {
				$icon = explode('.', $social);
				$icon = $icon[1];
				$icons[] = $icon;
			}
		} else {
			$icons = [];
		}	
		$pages = DB::table('pages')->where('status','publish')->get();
		$leaderboard = DB::table('reklams')->where('position','leaderboard')->where('status','display')->orderby('id','DESC')->first();
		view()->share([
			'categories' => $categories,
			'settings' => $settings,
			'icons' => $icons,
			'pages' => $pages,
			'leaderboard'=>$leaderboard,
		]);
	}

	public function index() {
		$featured = DB::table('posts')->where('category_id','LIKE','%1%')->orderby('id','DESC')->get();//%16% bunun sebebi kategorilerde numarası 16 bulunanları çek demek
		$general = DB::table('posts')->where('category_id','LIKE','%2%')->orderby('id','DESC')->get();
		$sport = DB::table('posts')->where('category_id','LIKE','%3%')->orderby('id','ASC')->get();
		$economy = DB::table('posts')->where('category_id','LIKE','%4%')->orderby('id','ASC')->get();
		$politic = DB::table('posts')->where('category_id','LIKE','%5%')->orderby('id','ASC')->get();
		$allposts = DB::table('posts')->where('status','publish')->orderby('id','DESC')->get();
		return view('frontend.index',['featured'=>$featured,'general'=>$general,'sport'=>$sport,'economy'=>$economy,'politic'=>$politic,'allposts'=>$allposts]);
	}

	public function category($slug) {
		$cat = DB::table('categories')->where('slug',$slug)->first();
		$posts = DB::table('posts')->where('category_id','LIKE','%'.$cat->id.'%')->get();
		return view('frontend.category',['posts'=>$posts,'cat'=>$cat]);
	}

	public function article($id) {
		$data = DB::table('posts')->where('id',$id)->first();
		$views = $data->views;#Wiew sayısını arttırmak için
		DB::table('posts')->where('id',$id)->update(['views'=>$views + 1]);#Wiew sayısını arttırmak için
		$category = explode(',', $data->category_id);
		$category = $category[0];
		$more = DB::table('posts')->where('category_id','LIKE','%'.$category.'%')->get();
		return view('frontend.article',['data'=>$data,'more'=>$more]);
	}

	public function pages($slug) {
		$data = DB::table('pages')->where('slug',$slug)->first();
		$lastest = DB::table('posts')->where('status','publish')->orderby('id','ASC')->get();
		return view('frontend.page',['data'=>$data,'lastest'=>$lastest]);
	}

	public function contactUs() {
		$lastest = DB::table('posts')->where('status','publish')->orderby('id','ASC')->get();
		return view('frontend.contact-us',['lastest'=>$lastest]);
	}


}
