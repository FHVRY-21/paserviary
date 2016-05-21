<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Input;
use App\Http\Requests;

class homecontoller extends Controller
{
    //

    	public function shop()
	{
		$data = \App\Prdks::all();
		return view('shop')->with('data',$data);
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

			public function order()
	{
$data = \App\Pembayaran::where('status',"Belum Dikonfirmasi")->get();
		return view('order')->with('data',$data);
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

						public function orderptnh()
	{
		$data = \App\Pembayaran::where('status',"Sudah Dikonfirmasi")->get();
		return view('orderptnh')->with('data',$data);
	}
		public function usrdsh()
	{
		return view('usrdsh');
	}

	public function inputprod(Request $request)
	{
		$nama_barang = $request->input('nama_barang');
		$jumlah = $request->input('jumlah');
		$harga = $request->input('harga');
		$tanggal_panen = $request->input('tanggal_panen');
		$satuan = $request->input('satuan');
		$kategori = $request->input('kategori');
		$id_petani = $request->input('id_petani');

		// if(Input::hasFile('image')){
  //           $photo = date("YmdHis")
  //           .uniqid()
  //           ."."
  //           .Input::file('image')->getClientOriginalExtension();
        
  //           Input::file('image')->move(storage_path(),$photo);
  //           $user->image = $photo;
  //       }

		$data = array (
				'nama_barang' => $nama_barang,
				'harga' => $harga,
				'tanggal_panen' => $tanggal_panen,
				'jumlah' => $jumlah,
				'satuan' => $satuan,
				 'tgl_post' => date("Y-m-d H:i:s"),
				 'kategori' => $kategori,
				 // 'image' => $image,
				 'id_petani' => $id_petani


			);
		// $file = Input::file('image');
		// 			$namafile = round(microtime(true)).'.'.$file->getClientOriginalExtension();
		// 			if(Input::hasFile('image')){
		// 				if($file->move('images'.'/', $namafile)) {
		// 					$posting->image = $namafile;
		// 				} else {
		// 					return "error";
		// 				}
		// 			}
				\DB::table('prdks')->insert($data);

				return \Redirect::to('/prdkstab');

	}

	public function inputpembelian(Request $request)
	{
		$nama = $request->input('nama');
		$id_petani = $request->input('id_petani');
		$id_user = $request->input('id_user');
		$satuanharga = $request->input('satuanharga');
		$jumlah = $request->input('jumlah');
		$id_prdks = $request->input('id_prdks');
		$data = array (
				'nama' => $nama,
				'id_petani' => $id_petani,
				'id_user' => $id_user,
				'satuanharga' => $satuanharga,
				 'tgl_post' => date("Y-m-d H:i:s"),
				 'jumlah' => $jumlah,
				 'id_prdks' => $id_prdks,
				 'status_pembayaran' => 'Belum Dibayar',
				 'status_role' => 'Stok Ada'
				 
			);
				\DB::table('cart')->insert($data);

				return \Redirect::to('/orderusr');

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



public function deleteprod($id)
{
$data = \App\Prdks::find($id);
$data->delete();
$data = \App\Pembelian::find($id);
$data->delete();
$data = \App\Pembayaran::find($id);
$data =
$data = \App\Prdks::all();
return view('prdkstab')->with('data',$data);
}
public function deletecart($id)
{
$data = \App\Pembelian::find($id);
$data->delete();
$data = \App\Pembelian::all();
return view('orderusr')->with('data',$data);
}
public function editprdks($id){
$data = \App\Prdks::find($id);
return view('editprdks')->with('data',$data);

}

public function setting(){

return view('settinguser');
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

					public function inputpembayaran(Request $request)
	{

		$nama = $request->input('nama');
		$total_pembayaran = $request->input('total_pembayaran');
		$tanggal_bayar = $request->input('tanggal_bayar');
		$no_rekening = $request->input('no_rekening');
		$id_user = $request->input('id_user');
		$id_petani = $request->input('id_petani');
		$id_prdks = $request->input('id_prdks');
		$jumlah = $request->input('jumlah');
		$no_rekekning = $request->input('no_rekekning');
		$data = array (
				'nama' => $nama,
				'id_petani' => $id_petani,
				'id_user' => $id_user,
				'id_prdks' => $id_prdks,
				'jumlah' => $jumlah,
				'no_rekening' => $no_rekening,
				 'total_pembayaran' => $total_pembayaran,
				 'tanggal_bayar' => 'tanggal_bayar'
			);
				\DB::table('pembelian')->insert($data);

	$data= \App\Pembelian::find($request->id);
	$data->status_pembayaran = "Menunggu Konfirmasi";
	$data->save();


				return \Redirect::to('/orderusr');

	}

	public function konfirmasiorder($id){
		$s =  \App\Pembayaran::find($id);
		$s->status = Input::get('bayar');
		$s->save();

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














