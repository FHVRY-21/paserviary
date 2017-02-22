<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

use App\Prdks;
use App\Pembelian;
use App\Pembayaran;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class homecontoller extends Controller
{
    //

    	public function shop()
	{

		$data = \App\Prdks::all();
	$bebek = DB::table('prdks')->count();
	$bebek1 = DB::table('prdks')->where('kategori', "Sayur")->count();
	$bebek2 = DB::table('prdks')->where('kategori', "Buah")->count();
	$bebek3 = DB::table('prdks')->where('kategori', "Rempah-Rempah")->count();

	return view('shop')->with('data',$data)->with('bebek', $bebek)->with('bebek1', $bebek1)->with('bebek2', $bebek2)->with('bebek3', $bebek3);	
	}

		public function ktg1()
	{
$data = \App\Prdks::where('kategori',"Buah")->get();
$bebek = DB::table('prdks')->count();
	$bebek1 = DB::table('prdks')->where('kategori', "Sayur")->count();
	$bebek2 = DB::table('prdks')->where('kategori', "Buah")->count();
	$bebek3 = DB::table('prdks')->where('kategori', "Rempah-Rempah")->count();
		return view('shop')->with('data',$data)->with('bebek', $bebek)->with('bebek1', $bebek1)->with('bebek2', $bebek2)->with('bebek3', $bebek3);
	}	


	   public function login()
	{
		return view('login');
	}

		   public function inputprdks()
	{
		return view('inputprdks');
	}

		public function reg()
	{
		return view('reg');
	}

			public function ptnusr()
	{
		return view('ptnusr');
	}

				public function dc1()
	{
		return view('dc1');
	}

			public function orderptnh()
	{
$data = \App\Pembayaran::where('status',"Sudah Dikonfirmasi")->get();
		return view('orderptnh')->with('data',$data);
	}

		

				public function orderusr()
	{
		$data = \App\Pembelian::where('status_pembayaran',"Belum Dibayar") ->orWhere(function ($query) {
                $query->where('status_pembayaran',"Menunggu Konfirmasi");
            })->get();
		
		return view('orderusr')->with('data',$data);
	}

					public function orderusrh()
	{
		$data = \App\Pembelian::where('status_pembayaran',"Sudah Dikonfirmasi")->get();
		return view('orderusrh')->with('data',$data);
	}

						public function orderptn()
	{
		$data = \App\Pembayaran::where('status',"Belum Dikonfirmasi")->get();
		return view('order')->with('data',$data);
	}
		public function usrdsh()
	{
		$data = \App\Prdks::all();
		return view('usrdsh')->with('data',$data);
	}

	public function inputprod(Request $request)
	{
		$data = new \App\Prdks;
		$data->nama_barang = Input::get('nama_barang');
		$data->jumlah = Input::get('jumlah');
		$data->harga = Input::get('harga');
		$data->satuan = Input::get('satuan');
		$data->kategori = Input::get('kategori');
		$data->tanggal_panen = Input::get('tanggal_panen');
		$data->id_petani = Input::get('id_petani');
		$data->desr = Input::get('desr');
		$data->nama_petani = Input::get('nama_petani');
		$data->no_rekening = Input::get('no_rekening');
		$data->tgl_post =  date("Y-m-d H:i:s");

		if(Input::hasFile('gambar')){
            $gambar = date("YmdHis").uniqid().".".Input::file('gambar')->getClientOriginalExtension();
        
            Input::file('gambar')->move(storage_path(),$gambar);
            $data->gambar = $gambar;
        }
		// echo $gambar;
		// die();
 		$data->save();
 		return redirect(url('/prdkstab'));

	}

	public function profpic(Request $request) {
		$data = new \App\User;
				if(Input::hasFile('gambar')){
            $gambar = date("YmdHis").uniqid().".".Input::file('gambar')->getClientOriginalExtension();
        
            Input::file('gambar')->move(storage_path(),$gambar);
            $data->gambar = $gambar;
        }
		// echo $gambar;
		// die();
 		$data->save();
	}

	public function inputimage(){
		 $image = Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('images/' . $filename);
 
        
                Image::make($image->getRealPath())->resize(200, 200)->save($path);
                $user->image = $filename;
                $user->save();
	}

	public function inputpembelian(Request $request)
	{

		$data = new \App\Pembelian;
		$data->nama = Input::get('nama');
		$data->id_user = Input::get('id_user');
		$data->id_petani = Input::get('id_petani');
		$data->satuanharga = Input::get('harga');
		$data->jumlah = Input::get('jumlah');
		$data->id_prdks = Input::get('id_prdks');
		$data->no_rekening = Input::get('no_rekening');
		$data->status_pembayaran = "Belum Dibayar";
		$data->status_role = "Stok Ada";
		$data->tgl_post =  date("Y-m-d H:i:s");
			if ('jumlah' > $data->jumlah) {
	# code...
}
	
		$data->save();
		return redirect(url('/orderusr'));
	}
	    	public function welcome()
	{
		$data = \App\Prdks::all();
		return view('welcome')->with('data',$data);
	}

		    	public function prdkstab()
	{
		$data = \App\Prdks::all();
		return view('prdkstab')->with('data',$data);
	}

public function single($id){
$data = \App\Prdks::find($id);
return view('single')->with('data',$data);
}

// public function pdf($id)
// 	{
// 		$data = \App\Pembayaran::where('id_petani', $id)->get();
// 		return view('pdf')->with('data',$data);
// 	}
public function deleteprod($id)
{
if ($p = \App\Pembelian::where('id_prdks', $id)->first()) {
	$p->status_role = "Dihapus";
$p->status_role = $status_role;


$z = \App\Prdks::find($id);
$z->delete();
$p->save();

$data = \App\Prdks::all();
return view('prdkstab')->with('data',$data);
}
else{

	
$data = \App\Prdks::find($id);
$data->delete();


$data = \App\Prdks::all();
return view('prdkstab')->with('data',$data);
}
}
}
public function deletecart($id)
{
$data = \App\Pembelian::find($id);
$data->delete();
$data = \App\Pembelian::all();
return view('orderusr')->with('data',$data);
}

public function deletecartptn($id)
{
$data = \App\Pembayaran::find($id);
$data->delete();
$data = \App\Pembayaran::all();
return view('orderptn')->with('data',$data);
}
public function editprdks($id){
$data = \App\Prdks::find($id);
return view('editprdks')->with('data',$data);

}

public function editusr($id){
$data = \App\User::find($id);
return view('settinguser')->with('data',$data);

}

public function bayar($id){

$data = \App\Pembelian::find($id);
return view('bayar')->with('data',$data);
}
// function updateprdks(Request $request){
//    $data = \App\Prdks::find($request->input('id'));

// 		$data->nama_barang;
// 		$data->jumlah;
// 		$data->harga;
// 		$data->satuan;
// 		$data->kategori;
// 		// $data->image;
// 		$data->save();
// 		return \Redirect::to('/prdkstab');
// 	}

public function updateprdks(Request $r){
	$s= \App\Prdks::find($r->id);
	$s->nama_barang = $r->nama_barang;
	$s->jumlah = $r->jumlah;
	$s->harga = $r->harga;
	$s->satuan = $r->satuan;
	$s->kategori = $r->kategori;
	$s->save();
	return \Redirect::to('/prdkstab');
}

public function updateusr(Request $r){
	$s= \App\User::find(Auth::user()->id);
	$s->nama_depan = $r->nama_depan;
	$s->nama_belakang = $r->nama_belakang;
	$s->alamat = $r->alamat;
	$s->no_rekening = $r->no_rekening;
	$s->no_telp = $r->no_telp;
	   


        $s->save();
	return \Redirect::to('/ptnusr');
}

					public function inputpembayaran(Request $request)
	{



		$data = new \App\Pembayaran;
		$data->nama = Input::get('nama');
		$data->total_pembayaran = Input::get('total_pembayaran');
		$data->tanggal_bayar = Input::get('tanggal_bayar');
		$data->no_rekening = Input::get('no_rekening');
		$data->id_user = Input::get('id_user');
		$data->id_petani = Input::get('id_petani');
		$data->id_prdks = Input::get('id_prdks');
		$data->id_cart = Input::get('id_cart');
		$data->jumlah = Input::get('jumlah');
		$data->no_rekening = Input::get('no_rekening');
		$data->status = "Belum Dikonfirmasi";
$data->save();

	$data= \App\Pembelian::find($data->id_cart);
	 $data->status_pembayaran = "Menunggu Konfirmasi";
	 $data->save();
		// $data->tgl_post =  date("Y-m-d H:i:s");
				
		$data->save();




				return \Redirect::to('/orderusr');

	}


	public function konfirmasiorder($id){
		$s =  \App\Pembayaran::find($id);
		$s->status = Input::get('bayar');
		$s->save();

		$r = \App\Pembelian::find($s->id_cart);
		$status_pembayaran = "Sudah Dikonfirmasi";
		$r->status_pembayaran = $status_pembayaran;
		$r->save();

$id = \App\Prdks::orderBy('id', 'desc')->first();

$p = \App\Prdks::find($s->id_prdks);
		$jumlah = $p->jumlah - $s->jumlah;
		$p->jumlah = $jumlah;

		$p->save();

		return \Redirect::to('/orderptn');

	}

// public function inputpembayaran2 (Request $r) {
// 	$s= \App\Pembelian::find($r->id);
// 	$s->status_pembayaran = "Menunggu Konfirmasi";
// 	$s->save();
// 	return \Redirect::to('/orderusr');
// }
}














