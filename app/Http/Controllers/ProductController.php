<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jenis_kecil;
use App\master_merk;
use App\jenis;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{

      public function CVT()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'CVT')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'CVT')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }

      public function SPB()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'SPB')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Supply Bahan Bakar')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }

      public function BBU()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'BBU')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Blok Bore Up')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }
   

     public function KPL()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'KPL')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Kopling')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }
      public function KNP()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'KNP')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Knalpot')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }
      public function AKM()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'AKM')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Aksesoris Mesin')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }
      public function CCS()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'CCS')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Crankcase')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }
        public function PDG()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'PDG')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Pendingin')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }

         public function GER()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'GER')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Gear')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }

         public function VRA()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'VRA')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Velg Racing')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }
         public function VRU()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'VRU')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Velg Ruji')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }
         public function SAR()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'SAR')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Swing Arm')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }
         public function RTI()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'RTI')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Rantai')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }
 
         public function AKR()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'AKR')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Aksesoris Roda')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }
         public function BAN()
    {
         $data = array('data'=>jenis_kecil::where('jenis', '=', 'BAN')->orderBy('id','desc')->paginate(9));
         $master_jenis = \App\master_jenis::with('jeniss')->get();
         $data3 = array('data3'=>master_merk::all());
         $data4 = array('data4'=>jenis::where('name', '=', 'Ban')->get());
        return view('product.product')->with('master_jeniss',$master_jenis)->with($data)->with($data3)->with($data4);
    }







}
