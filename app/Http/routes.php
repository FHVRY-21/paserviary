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
Route::get('/dc', 'homecontoller@dc1');
Route::get('/orderptn', 'homecontoller@orderptn');
Route::get('/orderusr', 'homecontoller@orderusr');
Route::get('/orderptnh', 'homecontoller@orderptnh');
Route::get('/orderusrh', 'homecontoller@orderusrh');
Route::get('/prdkstab', 'homecontoller@prdkstab');
Route::get('/single/{id}', 'homecontoller@single');
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
Route::post('/login','Auth\AuthController@postLogin');

Route::get('/logout','Auth\AuthController@getLogout');
Route::get('/settingusr/{id}','homecontoller@editusr');
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');


Route::get('/usrdsh','homecontoller@usrdsh');
Route::post('inputprod','homecontoller@inputprod');
Route::post('konfirmasiorder/{id}',['as'=>'konfirmasiorder','uses'=>'homecontoller@konfirmasiorder']);
Route::post('inputpembelian','homecontoller@inputpembelian');
Route::post('inputpembayaran','homecontoller@inputpembayaran');
Route::post('/inputpembayaran2','homecontoller@inputpembayaran2');
Route::get('/deleteprod/{id}', 'homecontoller@deleteprod');
Route::post('/deleteprod/{id}', 'homecontoller@deleteprod');
Route::get('/deletecart/{id}', 'homecontoller@deletecart');
Route::post('/deletecart/{id}', 'homecontoller@deletecart');

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