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
use App\User;
use App\Order;
use Carbon\Carbon;
use Validator;
use Redirect;
use Auth;
use DB;

class ManagerController extends Controller{
	


	/*public function managerDashboard(){
		return view('admin.dashboard.index');
	}*/

	public function managerDashboard(){
     $users = array();
    foreach(User::all() as $user) {  
      $user[0] = 'no user';
      $users[$user->id] = $user->name;
    }

    $viewRecentOrders = Order::all();     //<----- ITO UNG SA RECENT TRANSACTION NA NASA LANDING PAGE NG DASHBOARD
    $viewRecentUsers = User::all();

    $recentOrderID = DB::table('orders')->max('id');

    date_default_timezone_set('Asia/Manila');
    $date = Carbon::now();
    $date = $date-> subDays(7);
    $minDate = $date->format('Y-m-d H:i:s');

    $count = $viewRecentOrders -> count('id');
    $countUser = $viewRecentUsers -> count('id');
    $recentOrderDate = $viewRecentOrders -> max('created_at');
    //$recentOrderID = $viewRecentOrders-> max('order_id');

    $date = Carbon::now();
    //$orderDiff = date_diff($date,$recentOrderDate);

    $orderNotif= "";
    if($recentOrderDate > $minDate) {
         $orderNotif = "New Order# " . $recentOrderID .  " has been placed";
        
      } else {
      $orderNotif = "No new order";
    } 

    return View('manager.dashboard.index')
    ->with('viewRecentOrders', $viewRecentOrders)
    ->with('total' , Order::all())
    ->with('countUser', $countUser)
    ->with('count', $count)
    ->with('orderNotif', $orderNotif)
    ->with('date', $date)
    ->with('recentOrderDate', $recentOrderDate)
    ->with('minDate', $minDate);
    //->with('orderDiff', $orderDiff);
  }

public function managerCharts(){
    return view('manager.dashboard.charts');
  }

  public function managerTables(){
    return view('manager.dashboard.tables');
  }

//TABLE ORDERS 
  /*public function tableOrders(){

    $viewTableOrders = Order::all();

    return view('manager.dashboard.tableOrders')
    ->with('viewTableOrders', $viewTableOrders);
  }*/
//END

//--------- CROSSTAB TRY LANG MUNA ------------------

public function tableOrders(){

    $viewTableOrders = Order::all();
    $data = DB::table('order_details')->get();
    $product= DB::table('products')->get();
    $productJoin = DB::table('order_details')->join('products', 'products.id', '=', 'order_details.product_id')->groupBy('order_details.created_at', 'title')->get();

    return view('tableOrders')
    ->with('cart', Cart::all())
    ->with('category',Category::all())
    ->with('viewTableOrders', $viewTableOrders)
    ->with('orderDetails', $data)
    ->with('productQty', $product)
    ->with('productJoin', $productJoin);
}


/*
//------- TRY OUT LNG TONG CROSSTAB -----------------------
public function tableOrders(){

    $viewTableOrders = Order::all();
    $date = DB::table('orders')->get();

    //$picks = DB::table('picks')->distinct()->select('user_id')->where('weeknum', '=', 1)->groupBy('user_id')->get();

  

    foreach ($date as $dates) {
         $table[] = $dates->created_at;
         dd($table);
    }

    $emptyRow = array_fill_keys($dates,'');

    foreach ($dates as $k=>$v) {
      $dates[$k] = date('d-M', strtotime($v));
    }

    $heads = "<table border='1'>\n";
    $heads .= "<tr><th>Name</th><th>" . join('</th><th>', $dates) . "</th></tr>\n";



    $product= DB::table('products')->select('order_details.created_at', 'title', 'order_details.quantity')->join('order_details', 'products.id','=', 'order_details.products.id')->groupby('order_details.created_at','title')->get();
    // $productJoin = DB::table('order_details')->join('products', 'products.id', '=', 'order_details.product_id')->groupBy('order_details.created_at', 'title')->get();
    $curname='';
    $tdata = '';

    while (list($d, $sn, $s) = $product->fetch_row()) {
        if ($curname != $sn) {
            if ($curname) {
                $tdata .= "<tr><td>$curname</td><td>" . join('</td><td>', $rowdata). "</td></tr>\n";
            }
            $rowdata = $emptyRow;
            $curname = $sn;
        }
        $rowdata[$d] = $s;
    }
$tdata .= "<tr><td>$curname</td><td>" . join('</td><td>', $rowdata). "</td></tr>\n";
$tdata .= "</table\n";


    return view('manager.dashboard.tableOrders')
    ->with('viewTableOrders', $viewTableOrders)
    ->with('orderDetails', $date)
    ->with('productQty', $product)
    ->with('theads', $heads)
    ->with('tdata', $tdata);
}
*/


//TABLE USERS
public function tableUsers(){
  
  $viewTableUsers = User::all();

  return view('manager.dashboard.tableUsers')
  ->with('viewTableUsers', $viewTableUsers);
}
//END


//LANDING PAGE NG PRODUCT NA MERONG ADD FUNCTIONALITY
  /*public function addProducts(){
    $category = Category::all();
      $subcategory = Subcategory::all();
      $products = Product::all();
      $brands = Brand::all();

    return view('manager.dashboard.addProducts')
    ->with('subcategories', subcategory::all())
    ->with('brand', Brand::all())
    ->with('products', Product::all());
  }*/
//END NG PRODUCT NA MERONG ADD FUNCTIONALITY


//START NG EDIT PRODUCTS    
    /*public function editProducts($id) {
    $brands = array();
    foreach(Brand::all() as $brand) {  
      $brands[0] = 'no brand';
      $brands[$brand->id] = $brand->name;
    }

     $subcategories = array();

    foreach(Subcategory::all() as $subcategory) {

      $subcategories[$subcategory->id] = $subcategory->name;
    }

    $viewproducts = Product::all();

    return View('manager.dashboard.editProducts')
    ->with('products', Product::find($id))
    ->with('subcategories', $subcategory)
    ->with('brands', $brands)
    ->with('viewproducts', $viewproducts)
    ->with('category' , Category::all());

  }*/
//END NG EDIT PRODUCTS


//CATEGORIES
  /*public function categories(){
        return view('manager/dashboard/categories')
        ->with('category' ,Category::paginate(5))
        ->with('subcategories',Subcategory::paginate(5))
        ->with('brand' ,Brand::paginate(5));
      
    }
     
    //store categories
     public function addCategories(){
            $categories = new Category();
            $categories->name = Input::get('category');
            $categories->save();
        
           return redirect('manager/dashboard/categories');
    }
    //edit categories
     public function editCategories(Request $request){
      $category = Category::find($request['postId']);
      $category->name = $request['category'];
      $category->update();
       return `ponse()->json(['message' => 'Updated Category'] , 200);      
    }*/


    // update categories
    /*public function updateCategories(){
 
       $data = array(
                   'name' => Input::get('category')
                );
        $id = Input::get('id');
        $i = DB::table('categories')->where('id',$id)->update($data);
               if($i > 0){
                    return redirect('manager/dashboard/categories');

        }return redirect('manager/dashboard/categories');

   }
   //delete category
    public function deleteCategories($id){
      $delete = DB::table('categories')->where('id',$id)->delete();
        if($delete){
          return redirect('manager/dashboard/categories');
        }

    }*/

    //store subcategory
     /*public function addSubcategories(){
       $subcategory = new Subcategory();
       $subcategory->name = Input::get('subcategory');
       $subcategory->category_id = Input::get('category_id');
       $subcategory->save();
       return redirect('manager/dashboard/categories');
    }*/


 

    //edit Subcategory
     /*public function editSubcategories($id){
          $subcategory = DB::table('subcategories')->get();
          $category = Category::all();
          $rows = DB::table('subcategories')->where('id',$id)->first();

         return view('manager.dashboard.editSubcategories')
         ->with('rows',$rows)
         ->with('category',$category)
         ->with('subcategories',$subcategory);
        }*/
    
    //update subcategory
      /*public function updateSubcategories(){
     
       $data = array(
                'name' => Input::get('subcategory'),
                'category_id' => Input::get('category_id')
                );

        $id = Input::get('id');
        $i = DB::table('subcategories')->where('id',$id)->update($data);
               if($i > 0){
                    return redirect('manager/dashboard/categories');

               }return redirect('manager/dashboard/categories');

       }*/
      //delete subcategory
   /*public function deleteSubcategories($id){
        $delete = DB::table('subcategories')->where('id',$id)->delete();
        if($delete){
            echo 'Record have been delete successfuly';
            return redirect('manager/dashboard/categories');
        }

    }*/

    // BRAND

    //storebrand
     /*public function addBrands(){
       $brands = new Brand();
       $brands->name = Input::get('brand');
       $brands->save();
       return redirect('manager/dashboard/categories');
    }*/

    //edit brand
     /*public function editBrands($id){
      $row = DB::table('brands')->where('id',$id)->first();

     return view('manager.dashboard.editBrands')
     ->with('row',$row)
     ->with('category',Category::all())
     ->with('subcategories',Subcategory::All());
     } */
    
    //update brand
     /*public function updateBrands(){
 
   $data = array(
            'name' => Input::get('brand')
            );
    $id = Input::get('id');
    $i = DB::table('brands')->where('id',$id)->update($data);
           if($i > 0){
                return redirect('manager/dashboard/categories');

           }return redirect('manager/dashboard/categories');

   }*/
}
