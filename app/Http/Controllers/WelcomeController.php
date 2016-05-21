<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\News;
use App\cart;
use App\jenis_kecil;
use App\master_merk;
use DB;
use App\response;
use Illuminate\Support\Facades\Input;
class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array('data'=>News::orderBy('id','desc')->limit(3)->get());
        
        $master_jenis = \App\master_jenis::with('jeniss')->get();
        // $data1 = array('data'=>jenis_kecil::all());
        $data1 = array('data1'=>jenis_kecil::orderBy('id','desc')->limit(3)->get());

        $data3 = array('data3'=>master_merk::all());

        $data4 = array('data4'=>News::orderBy('id','desc')->limit(1)->get());

        $data5 = array('data5'=>jenis_kecil::where('jenis', '=', 'KPL')->orderBy('id','desc')->paginate(4));
        $data6 = array('data6'=>jenis_kecil::where('jenis', '=', 'GER')->orderBy('id','desc')->paginate(4));

       // $data3 = array('data3'=>cart::all());
        // return $master_jenis;
		return view('welcome')->with($data)->with('master_jeniss',$master_jenis)->with($data1)->with($data5)->with($data3)->with($data4)->with($data6);
    }

   public function newsview($slug)
    {
         // $data = array('data'=>News::orderBy('id','desc')->limit(3)->get());
        
        $master_jenis = \App\master_jenis::with('jeniss')->get();
        // $data1 = array('data'=>jenis_kecil::all());
        // $data1 = array('data1'=>jenis_kecil::orderBy('id','desc')->limit(3)->get());
            $data1 = array('data1'=>response::all());
            $data = array('data'=>News::where('slug',$slug)->first());
            $data3 = array('data3'=>master_merk::all());
        // return $master_jenis;
        return view('ui.newsview')->with($data)->with($data1)->with('master_jeniss',$master_jenis)->with($data3);

            
    }
    public function detailproduct($ket)
    {
        $data = array('data'=>jenis_kecil::where('ket',$ket)->first());
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
            return view('ui.detailproduct')->with($data)->with('master_jeniss',$master_jenis)->with($data3);
    }
    public function savecart(Request $r)
    {
        $key = count(session('cart'));
        $array  = session('cart');
        $array[$key+1]['codejenis'] = Input::get('codejenis');
        $array[$key+1]['code'] = Input::get('code');
        $array[$key+1]['jenis'] = Input::get('jenis');
        $array[$key+1]['ket']= Input::get('ket');
        $array[$key+1]['harga'] = Input::get('harga');
        $array[$key+1]['gambar1'] = Input::get('gambar1');
        $r->session()->put('cart',  $array);

            // $data = new cart;
            // $data->codejenis = Input::get('codejenis');
            // $data->jenis = Input::get('jenis');
            // $data->ket = Input::get('ket');
            // $data->harga = Input::get('harga');
            // $data->save();

        return redirect()->back();

        
    }

    public function cart()
    {
        $master_jenis = \App\master_jenis::with('jeniss')->get();
        $cart = session('cart');
        // return $cart;
         return view('ui.cart')->with('cart',$cart)->with('master_jeniss',$master_jenis);

    }

    public function berita()
    {
       $master_jenis = \App\master_jenis::with('jeniss')->get();
       $data = array('data'=>News::orderBy('id','desc')->paginate(9));

        return view('ui.berita')->with('master_jeniss',$master_jenis)->with($data);


    }
    
    


   
    
}
