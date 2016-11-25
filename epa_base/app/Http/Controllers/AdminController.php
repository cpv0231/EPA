<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\TrackProducts;
use App\Subcategory;
use App\Category;
use App\Website;
use App\Product;
use App\Brand;
use App\Image;
use App\Cart;
use Validator;
use Redirect;
use Auth;
use DB;

class AdminController extends Controller
{	
	public function __construct(){
		$this->middleware(['auth','UserTypeCheck:3']);
	}
	public function adminPanel(){
		return view('admin.admin_panel');
	}

	public function activate(){
		$website = new Website;
		$website->is_enable= Input::get('is_enable');
		$website->save();

		return view('admin.admin_panel');
	}
	public function deactivate(){
		$website = new Website;
		$website->is_enable= Input::get('is_disable');
		$website->save();

		return view('admin.admin_panel');
	}

}
