<?php

namespace App\Http\Controllers;

use App\Models\Gambara;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Campusdigital\CampusCMS\Models\Cabang;
use Campusdigital\CampusCMS\Models\Gallery;

class CabangController extends Controller
{		
    /**
     * Menampilkan semua cabang
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Referral
        referral($request->query('ref'), 'site.cabang.index');
		
		// Data cabang
        $cabang = Cabang::all();

        // View
        return view('front.cabang.index', [
            'cabang' => $cabang,
		]);
    }
	
	public function galery(Request $request)
	{
		// Referral
        
		referral($request->query('ref'), 'site.galery.index');
		
		$all_gambar = Gallery::orderBy('id','desc')->paginate(8)->appends(request()->query());
		// View
		return view('front.galery.index',[
            'gambarr' => $all_gambar,
			
        ]);
	}

    
}