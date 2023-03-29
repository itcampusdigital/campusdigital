<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ajifatur\FaturCMS\Models\Mentor;
use Ajifatur\FaturCMS\Models\Mitra;
use Ajifatur\FaturCMS\Models\Program;
use Ajifatur\FaturCMS\Models\Slider;
use App\User;

class HomeController extends Controller
{		
    /**
     * Home Page
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Referral
        referral($request->query('ref'), 'site.home');

        // Data slider
        $slider = Slider::where('status_slider','=',1)->orderBy('order_slider','asc')->get();

        // Data program kursus reguler
        $program_reguler = Program::join('kategori_program','program.program_kategori','=','kategori_program.id_kp')->where('kategori_program.slug','=','reguler')->orderBy('program_at','asc')->limit(4)->get();

        // Data program kursus corporate
        $program_corporate = Program::join('kategori_program','program.program_kategori','=','kategori_program.id_kp')->where('kategori_program.slug','=','corporate')->orderBy('program_at','asc')->limit(4)->get();

        // Data program profesi
        $program_profesi = Program::join('kategori_program','program.program_kategori','=','kategori_program.id_kp')->where('kategori_program.slug','=','profesi')->orderBy('program_at','asc')->limit(4)->get();

        // Data mentor
        $mentor = Mentor::orderBy('order_mentor','asc')->get();
		
		// Data mitra
		$mitra = Mitra::orderBy('order_mitra','asc')->get();

        // View
        return view('front.home', [
            'mitra' => $mitra,
			'mentor' => $mentor,
			'slider' => $slider,
            'program_reguler' => $program_reguler,
            'program_corporate' => $program_corporate,
            'program_profesi' => $program_profesi,
		]);
    }
}