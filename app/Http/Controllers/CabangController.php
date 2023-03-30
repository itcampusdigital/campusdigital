<?php

namespace App\Http\Controllers;

use App\Models\Gambara;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Ajifatur\FaturCMS\Models\Cabang;

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
		
		$all_gambar = gallery::orderBy('id','desc')->get();
		// View
		return view('front.galery.index',[
            'gambarr' => $all_gambar,
			
        ]);
	}

    public function create(Request $request){
        referral($request->query('ref'), 'site.galery.create');
		
        return view('front.galery.create');
    }

    public function store(Request $request)
    {
		
        $validator = $request->validate([
            'judul_gambar' => 'required',
            'gambar' => 'required|file|image'
        ]);

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $nama_gambar = $gambar->getClientOriginalName();
            
           
            $gambar->move(public_path().'/assets/images/dokumentasi', $nama_gambar);
            $validator['gambar'] = $nama_gambar;
        }

        gallery::create($validator);
       
        
		// View
		return redirect()->back();
        
        

    }
}