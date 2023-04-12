<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Models\Gambara;
use Illuminate\Support\Facades\File;
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
		
		$all_gambar = gallery::orderBy('id','desc')->paginate(8)->appends(request()->query());
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

    public function edit(Request $request, $id){

        referral($request->query('ref'), 'galery.edit',['id'=>$id]);
        $list_gambar = gallery::where('id','=',$id)->first();

        return view('front.galery.edit',[
            'gambar' => $list_gambar
        ]);
    }

    public function update(Request $request, $id)
    {

        referral($request->query('ref'), 'site.galery.index');
        $all_gambar = gallery::orderBy('id','desc')->get();


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

        $user = gallery::find($id);

        $user->judul_gambar = $validator['judul_gambar'];
        $user->gambar = $validator['gambar'];
        $user->update();
              
		// View
        return view('front.galery.index',[
            'gambarr' => $all_gambar,
            
        ]);

    }

    public function delete(Request $request, $id)
    {
        $galleri = gallery::find($id);

        $path = public_path('assets/images/dokumentasi/'.$galleri['gambar']);

        if(File::exists($path)){
            File::delete($path);
            $galleri->delete();
            return redirect()->back();
        }

        else{
            alert('File tidak ditemukan');
            return redirect()->back();
        }

        
    }
}