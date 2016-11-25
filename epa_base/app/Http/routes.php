<?php


use App\Product;
use App\Category;
use App\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;

/*
|--------------------------------------------------------------------------
|
|				Admin
|					
| 
|--------------------------------------------------------------------------
| 
|
*/

Route::any('testing' ,function(){
		$year = '-2 year';
		$month = '-2 month';
		$day = '-'.(rand(1,29)).'day';
		$time = strtotime( $year . $month.$day , time());
		$date = date("Y-m-d", $time);
		echo $date .'<br>';

		for($i =1; $i <=121317 ; $i++){

			$rand = (rand(1,324));
			echo " " . $rand . '<br>';
		}
		
});

Route::any('drilldown' , 'ManagerController@tableOrders');

Route::get('admin_panel' , 'AdminController@adminPanel');
Route::post('admin_panel/activate' , 'AdminController@activate');
Route::post('admin_panel/deactivate' , 'AdminController@deactivate');

/*
|--------------------------------------------------------------------------
|
|				Admin
|					
| 
|--------------------------------------------------------------------------
| 
|
*/

/*
|--------------------------------------------------------------------------
|
|				Store front
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
Route::get('/', 'StoreController@index');
//Route::get('store/subcategory/{cat_id}', 'StoreController@getSubcategory');
Route::get('subcategory/{id}' , 'StoreController@getSubcategory');
Route::get('store/search/', 'StoreController@getSearch');;
Route::any('product-review/{id}' , 'StoreController@viewproduct');
Route::post('post-review', 'ProductReviewController@store');
Route::post('review-postcart', 'ProductReviewController@addToCart');
/*
|--------------------------------------------------------------------------
|
|				end store
|					
| 
|--------------------------------------------------------------------------
| 
|
*/

/*
|--------------------------------------------------------------------------
|
|				Ajax filter
|					
| 
|--------------------------------------------------------------------------
| 
|
*/

Route::get('epa/ajax-sortproducts', 'AjaxController@sortproducts');
Route::get('epa/ajax-muncipality' , 'AjaxController@ajaxRequestCity');
Route::get('epa/ajax-brgy' , 'AjaxController@ajaxRequestBrgy');
Route::get('epa/ajax-search' , 'AjaxController@Ajaxsearch');
Route::get('epa/ajax-category' , 'AjaxController@ajaxCategory');
Route::any('epa/ajax-price', 'AjaxController@Ajaxprice');
Route::any('ajax-products' , 'AjaxController@Ajaxproducts');
Route::any('ajax-brands', 'AjaxController@Ajaxbrands');


/*
|--------------------------------------------------------------------------
|
|				end ajax
|					
| 
|--------------------------------------------------------------------------
| 
|
*/

/*
|--------------------------------------------------------------------------
|
|				Category CRUD
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
Route::get('categories', 'CategoryController@index');
Route::get('categories-edit/{id}', 'CategoryController@edit');
Route::get('categories-delete/{id}', 'CategoryController@delete');
Route::post('categories-update', 'CategoryController@update');
Route::post('categories-store', 'CategoryController@store');

/*
|--------------------------------------------------------------------------
|
|				End Category CRUD
|					
| 
|--------------------------------------------------------------------------
| 
|
*/

/*
|--------------------------------------------------------------------------
|
|				Subcategory CRUD
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
Route::get('subcategories' , 'SubcategoryController@index');
Route::get('subcategories-edit/{id}', 'SubcategoryController@edit');
Route::get('subcategories-delete/{id}','SubcategoryController@delete');
Route::post('subcategories-update', 'SubcategoryController@update');
Route::post('subcategories-store', 'SubcategoryController@store');
/*
|--------------------------------------------------------------------------
|
|			End	Subcategory CRUD
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
/*
|--------------------------------------------------------------------------
|
|				Brand CRUD
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
Route::get('brands', 'BrandController@index');
Route::get('brands-edit/{id}', 'BrandController@edit');
Route::get('brands-delete/{id}', 'BrandController@delete');
Route::post('brands-store', 'BrandController@store');
Route::post('brands-update', 'BrandController@update');
/*
|--------------------------------------------------------------------------
|
|				End Brand CRUD
|					
| 
|--------------------------------------------------------------------------
| 
|
*/

/*
|--------------------------------------------------------------------------
|
|				Products CRUD
|					
| 
|--------------------------------------------------------------------------
| 
|
*/

Route::get('products', 'ProductController@index');
Route::get('products-edit/{id}', 'ProductController@edit');
Route::get('products-delete/{id}' , 'ProductController@delete');
Route::post('products-store', 'ProductController@store');
Route::post('products-update', 'ProductController@update');
/*
|--------------------------------------------------------------------------
|
|				End Products CRUD
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
/*
|--------------------------------------------------------------------------
|
|				Image products CRUD
|					
| 
|--------------------------------------------------------------------------
| 
|
*/

Route::get('products-image/{id}', 'ImageController@index');
Route::get('products/{product_id}/imagedelete/{id}' , 'ImageController@delete');
Route::post('products-imageupload' , 'ImageController@store');
/*
|--------------------------------------------------------------------------
|
|				End Products CRUD
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
/*
|--------------------------------------------------------------------------
|
|				Customer Create , signin
|					
| 
|--------------------------------------------------------------------------
| 
|
*/

Route::get('users/signin', 'UserController@getSignin' );
Route::GET('users/newaccount' , 'UserController@getNewaccount');
Route::POST('users/create' , 'UserController@postCreate');
Route::POST('users/login' , 'UserController@postSignin');
Route::GET('users/signout' , 'UserController@getSignout');
/*
|--------------------------------------------------------------------------
|
|			  End Customer 
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
/*
|--------------------------------------------------------------------------
|
|				Cart CRUD
|					
| 
|--------------------------------------------------------------------------
| 
|
*/

Route::get('store-viewcart' ,'CartController@viewCart');
Route::post('store-cart' ,'CartController@addToCart');
Route::post('cart-plus' , 'CartController@amountIncrement');
Route::post('cart-minus' , 'CartController@amountDecrement');
Route::get('cart/delete/{id}' ,'CartController@deleteCart');

/*
|--------------------------------------------------------------------------
|
|				End  Cart CRUD
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
/*
|--------------------------------------------------------------------------
|
|				Order 
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
Route::post('store/order', 'OrderController@postOrder');
Route::get('/store/vieworders', 'OrderController@getIndex');
Route::post('store/viewproduct/addcart', 'StoreController@addtocart');
/*
|--------------------------------------------------------------------------
|
|				end order
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
/*
|--------------------------------------------------------------------------
|
|				Wishlisht 
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
Route::get('store-wishlist', 'WishListController@viewWishlist');
Route::post('store-addwishlist' ,'WishListController@addToWishlist');
Route::post('store-wishlistcart' ,'WishListController@addToCart');
Route::get('wishlist-delete/{id}' ,'WishListController@deleteWishlist');

/*
|--------------------------------------------------------------------------
|
|				End wishlist
|					
| 
|--------------------------------------------------------------------------
| 
|
*/
//dashboard every view

Route::get('manager/dashboard', 'TrackproductController@TrackProducts');


Route::any('checkout','PaymentController@checkout'); 

 Route::any('checkout-orders' , 'PaymentController@getCheckout');
//rekta checkout... Route::any('checkout-orders' , 'OrderController@postOrder');
Route::any('done' , 'PaymentController@getDone');
Route::any('all', 'PaymentController@getAll');

Route::post('store-address' , 'PaymentController@postAddress');
Route::any('checkout-summary','PaymentController@postSummary');

Route::get('website-maintenance', function(){
	return view('errors.503');
});