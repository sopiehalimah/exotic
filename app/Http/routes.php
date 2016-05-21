<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::auth();

Route::get('/', function(Request $req){
	return session('cart');
});

// Route::get('/hapuscart', function(Request $request){
// return session()->forget('cart');
// // return redirect(url('ui.cart'));
// });

// Route::get('/hapuscart', 'WelcomeController@hapuscart');

Route::get('/allcart', 'WelcomeController@cart');

Route::get('/', 'WelcomeController@index');

Route::get('/berita', 'WelcomeController@berita');

Route::get('/home', 'HomeController@index');

Route::get('admin/home','AdminController@index');

Route::get('admin/newsadd','AdminController@newsadd');

Route::post('admin/newssave','AdminController@newssave');

Route::get('/gambar/{filename}',
	function ($filename)

	{
		$path = storage_path() . '/' . $filename;
		$file = File::get($path);
		$type = File::mimeType($path);

		$response = Response::make($file, 200);
		$response->header("content-Type", $type);

		return $response;
	});
Route::get('/foto/{filename}',
	function ($filename)

	{
		$path = storage_path() . '/' . $filename;
		$file = File::get($path);
		$type = File::mimeType($path);

		$response = Response::make($file, 200);
		$response->header("content-Type", $type);

		return $response;
	});

Route::get('/gambar1/{filename}',
	function ($filename)

	{
		$path = storage_path() . '/' . $filename;
		$file = File::get($path);
		$type = File::mimeType($path);

		$response = Response::make($file, 200);
		$response->header("content-Type", $type);

		return $response;
	});


Route::get('/detail/newsview/{slug}', 'WelcomeController@newsview');

Route::get('/detail/chart', 'WelcomeController@chart');

Route::get('/detail/product/{ket}', 'WelcomeController@detailproduct');

Route::get('admin/newstable','AdminController@newstable');

Route::get('admin/edit/{id}','AdminController@edit');

Route::post('admin/update', 'AdminController@update');

Route::get('admin/delete/{id}','AdminController@destroy');

Route::get('admin/masteradd','AdminController@masteradd');

Route::post('admin/master_merk_save','AdminController@master_merk_save');

Route::post('admin/master_jenis_save','AdminController@master_jenis_save');

Route::post('admin/jenis_save','AdminController@jenis_save');

Route::post('admin/jenis_kecil_save','AdminController@jenis_kecil_save');

// Route::get('/', ['middleware' => 'guest', 'uses' => 'BookController@getIndex']);

Route::post('/response','ResponseController@save');

Route::post('/savecart','WelcomeController@savecart');

Route::get('query','SearchController@search');

//mesin
Route::get('CVT','ProductController@CVT');

Route::get('Supply Bahan Bakar','ProductController@SPB');

Route::get('Blok Bore Up','ProductController@BBU');

Route::get('Kopling','ProductController@KPL');

Route::get('Knalpot','ProductController@KNP');

Route::get('Aksesoris Mesin','ProductController@AKM');

Route::get('Crankcase','ProductController@CCS');

Route::get('Pendingin','ProductController@PDG');

//roda
Route::get('Gear','ProductController@GER');

Route::get('Velg Racing','ProductController@VRA');

Route::get('Velg Ruji','ProductController@VRU');

Route::get('Swing Arm','ProductController@SAR');

Route::get('Stabiliser Rantai','ProductController@SRA');

Route::get('Rantai','ProductController@RTI');

Route::get('Aksesoris Roda','ProductController@AKR');

Route::get('Ban','ProductController@BAN');





Route::get('hapuscart/{id}', function(Request $r, $id){
	$array = session('cart');
	unset($array[$id]);
	session(['cart' => $array]);
	return redirect()->back();
});

Route::post('updatekuantitas', function(Request $r){
	$array = session('cart');
    $array[$r->id]['kuantitas'] = $r->id;
    $r->session()->put('cart',  $array);
});