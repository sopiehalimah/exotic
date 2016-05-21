<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jenis_kecil;
use App\master_jenis;
use App\jenis;

use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function search(Request $request)
    {

    	$query = $request->get('q');
    	$hasil = jenis_kecil::where('ket', 'LIKE', '%' . $query . '%')->paginate(12);
    	$master_jenis = \App\master_jenis::with('jeniss')->get();

    	return view('ui.result', compact('hasil', 'query'))->with('master_jeniss',$master_jenis);
    }
}
