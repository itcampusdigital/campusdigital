<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Campusdigital\CampusCMS\Models\Mentor;
use Campusdigital\CampusCMS\Models\Halaman;
use Campusdigital\CampusCMS\Models\Program;

class HalamanController extends Controller
{
    /**
     * Menampilkan detail halaman
     *
     * string $permalink
     * @return \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request, $permalink)
    {
        // Referral
        referral($request->query('ref'), 'site.halaman.detail', ['permalink' => $permalink]);

    	// Data halaman
    	$halaman = Halaman::where('halaman_permalink','=',$permalink)->firstOrFail();

        // Data mentor
        $mentor = Mentor::orderBy('order_mentor','asc')->get();
        
        if($permalink == 'mitra'){
            $mitra_program = Program::where('program_kategori',5)->get();

            return view('page.mitra',[
                'mitra_program' => $mitra_program
            ]);
        }

        if($halaman->halaman_tipe == 1){
            // View
            return view('front.halaman.detail', [
            	'halaman' => $halaman,
            ]);
        }
        elseif($halaman->halaman_tipe == 2){
            // View
            return view('page.'.$halaman->konten, [
                'halaman' => $halaman,
                'mentor' => $mentor,
            ]);
        }
    }
}