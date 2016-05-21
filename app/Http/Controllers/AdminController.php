<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use App\master_merk;
use App\master_jenis;
use App\jenis;
use App\jenis_kecil;
use App\User;
use App\response;
use Auth;

use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	// $admin = array('admin'=>User::all());
		return view('admin.home');
    }
    

    public function newsview($slug)
	{
		 // $data = array('data'=>News::orderBy('id','desc')->limit(3)->get());
        
        $master_jenis = \App\master_jenis::with('jeniss')->get();
        // $data1 = array('data'=>jenis_kecil::all());
        // $data1 = array('data1'=>jenis_kecil::orderBy('id','desc')->limit(3)->get());
        	$data1 = array('data1'=>response::all());
			$data = array('data'=>News::where('slug',$slug)->first());
        // return $master_jenis;
		return view('admin.newsview')->with($data)->with($data1)->with('master_jeniss',$master_jenis);

			
	}

    public function newsadd()
    {
        $data = array('data'=>News::all());
		return view('admin.newsadd')->with($data);
    }

    public function newssave()
    {
    	$news = new News;
    	$news->id_admin = 1;
		$news->judul = Input::get('judul');
		$news->isi = Input::get('isi');
		$news->slug = str_slug(Input::get('judul'));

		if(Input::hasFile('gambar')){
			$gambar = date('YmdHis')
			.uniqid()
			."."
			.Input::file('gambar')->getClientOriginalExtension();

			Input::file('gambar')->move(storage_path(),$gambar);
			$news->gambar = $gambar;

		}
		$news->save();

		return redirect(url('admin/newsadd'));
    }

    public function edit($id)
	{
		$data = array('data'=>News::find($id));

		//dd($data);

		return view('admin.newsupdate')->with($data);
	}

	public function update()
	{
		$news = News::find(Input::get('id'));
		$news->id_admin = 1;
		$news->judul = Input::get('judul');
		$news->isi = Input::get('isi');
		$news->slug = str_slug(Input::get('judul'));

		if(Input::hasFile('gambar')){
			$gambar = date('YmdHis')
			.uniqid()
			."."
			.Input::file('gambar')->getClientOriginalExtension();

			Input::file('gambar')->move(storage_path(),$gambar);
			$news->gambar = $gambar;

		}
		$news->save();

		return redirect(url('admin/newsadd'));
	}

	public function destroy($id)
	{
		News::find($id)->delete();
		return redirect(url('admin/newstable'));
	}

	public function editproduk($id)
	{
		$data = array('data'=>jenis_kecil::find($id));

		//dd($data);

		return view('admin.productupdate')->with($data);
	}

	public function updateproduk()
	{
		$product = jenis_kecil::find(Input::get('id'));
		$product->ket = Input::get('ket');
		$product->harga = Input::get('harga');

		if(Input::hasFile('gambar1')){
			$gambar1 = date('YmdHis')
			.uniqid()
			."."
			.Input::file('gambar1')->getClientOriginalExtension();

			Input::file('gambar1')->move(storage_path(),$gambar1);
			$product->gambar1 = $gambar1;

		}
		$product->save();

		return redirect()->back();
	}

	public function destroyproduk($id)
	{
		jenis_kecil::find($id)->delete();
		return redirect(url('admin/masteradd'));
	}



	public function masteradd()
	{
		$master_merk = master_merk::all();
		$master_jenis = master_jenis::all();
		$data = array('data'=>jenis_kecil::paginate(10));
		$jenis = jenis::all();
		return view('admin.masteradd')->with('master_merks',$master_merk)->with('master_jeniss',$master_jenis)->with('jeniss',$jenis)->with($data);
	}

	public function master_merk_save()
	{
		$master = new master_merk;
		$master->code = Input::get('code');
		$master->merk = Input::get('merk');
		
		$master->save();

		return redirect(url('admin/masteradd'));
	}

	public function master_jenis_save()
	{
		$master = new master_jenis;
		$master->code = Input::get('code');
		// $news->codemerk = Input::get('codemerk');
		$master->jenis = Input::get('jenis');
		
		$master->save();

		return redirect(url('admin/masteradd'));
	}
	public function jenis_save()
	{
		$master = new jenis;
		$master->code = Input::get('code');
		// $news->codemerk = Input::get('codemerk');
		$master->codejenis = Input::get('codejenis');
		$master->name = Input::get('name');
		
		$master->save();

		return redirect(url('admin/masteradd'));
	}
	public function jenis_kecil_save()
	{
		$master = new jenis_kecil;
		$master->code = Input::get('code');
		$master->codemerk = Input::get('codemerk');
		$master->codejenis = Input::get('codejenis');
		$master->jenis = Input::get('jenis');
		$master->ket = Input::get('ket');
		$master->harga = Input::get('harga');

		if(Input::hasFile('gambar1')){
			$gambar1 = date('YmdHis')
			.uniqid()
			."."
			.Input::file('gambar1')->getClientOriginalExtension();

			Input::file('gambar1')->move(storage_path(),$gambar1);
			$master->gambar1 = $gambar1;

		}
		
		$master->save();

		return redirect(url('admin/masteradd'));
	}


}
