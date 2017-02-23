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

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/shop', 'homecontoller@shop');
Route::get('/ktg1', 'homecontoller@ktg1');
Route::get('/dc', 'homecontoller@dc1');
Route::get('/orderptn', 'homecontoller@orderptn');
Route::get('/orderusr', 'homecontoller@orderusr');
Route::get('/orderptnh', 'homecontoller@orderptnh');
Route::get('/deletecartptn', 'homecontoller@deletecartptn');
Route::get('/orderusrh', 'homecontoller@orderusrh');
Route::get('/prdkstab', 'homecontoller@prdkstab');
Route::get('/single/{id}', 'homecontoller@single');
Route::get('/pdf/{id}', 'homecontoller@pdf');
Route::post('/single', 'homecontoller@single');
Route::get('/', 'homecontoller@welcome');
Route::get('/ptnusr', 'homecontoller@ptnusr');
Route::get('/inputpr', 'homecontoller@inputpr');

Route::get('/inputprdks', function() {
	return view('inputprdks');
});
Route::get('/editprdks/{id}', 'homecontoller@editprdks');
Route::get('/bayar/{id}', 'homecontoller@bayar');
Route::get('/updateprdks/{id}', 'homecontoller@updateprdks');
Route::post('/updateprdks', 'homecontoller@updateprdks');
Route::post('/updateusr', 'homecontoller@updateusr');

Route::get('/login','Auth\AuthController@getLogin');
Route::post('/login','Auth\AuthController@tryLogin');

Route::post('/logout','Auth\AuthController@getLogout');
Route::get('/settingusr/{id}','homecontoller@editusr');
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');


Route::get('/usrdsh','homecontoller@usrdsh');
Route::post('inputprod','homecontoller@inputprod');
Route::post('konfirmasiorder/{id}','homecontoller@konfirmasiorder');
Route::post('inputpembelian','homecontoller@inputpembelian');
Route::post('inputpembayaran','homecontoller@inputpembayaran');
Route::post('/inputpembayaran2','homecontoller@inputpembayaran2');
Route::get('/deleteprod/{id}', 'homecontoller@deleteprod');
Route::post('/deleteprod/{id}', 'homecontoller@deleteprod');
Route::get('/deletecart/{id}', 'homecontoller@deletecart');
Route::post('/deletecart/{id}', 'homecontoller@deletecart');
// Route::get('/customer/pdf',[
//     'uses'  =&amp;gt; 'CustomerController@getPdf',
//     'as'    =&amp;gt; 'customer.pdf',
// ]);



Route::get('pdf/{id}', function($id){
    $data = \App\Pembayaran::where('id_petani', $id)->get();
    $pdf = PDF::loadView('pdf', ['data' => $data]);
    return $pdf->download('detailpenjualan_pasr.pdf');
});


Route::get('/images/{filename}',
    function ($filename)
{
    $path = storage_path() . '/' . $filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('/single/{filename}', function ($filename){ 	
	$path = storage_path() . '/' .$filename; 	
	$file = File::get($path); 	
	$type = File::mimeType($path); 	
	$data = Response::make($file,200); 	
	$data->header("Content-Type", $type); 	
	return $data; 
});
Route::auth();

Route::get('/home', 'homecontoller@index');
Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');
