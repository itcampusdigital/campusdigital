<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Ajifatur\FaturCMS\Models\KategoriProgram;
use Ajifatur\FaturCMS\Models\Program;
use Ajifatur\FaturCMS\Models\UserProgram;

class ProgramController extends Controller
{
    /**
     * Menampilkan program berdasarkan kategori
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $category)
    {
        // Referral
        referral($request->query('ref'), 'site.program.index', ['category' => $category]);

		// Data kategori
		$kategori = KategoriProgram::where('slug','=',$category)->firstOrFail();
		
        // Data program
        $program = Program::join('users','program.author','=','users.id_user')->join('kategori_program','program.program_kategori','=','kategori_program.id_kp')->where('program_kategori',$kategori->id_kp)->orderBy('program_at','asc')->paginate(12);

        // View
        return view('front.program.index', [
			'kategori' => $kategori->kategori,
            'program' => $program
        ]);
    }

    /**
     * Menampilkan detail program
     *
     * string $permalink
     * @return \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request, $permalink)
    {		
        // Referral
        referral($request->query('ref'), 'site.program.detail', ['permalink' => $permalink]);

        // Data program
        $program = Program::join('users','program.author','=','users.id_user')->join('kategori_program','program.program_kategori','=','kategori_program.id_kp')->where('program_permalink','=',$permalink)->firstOrFail();

        // View
        return view('front.program.detail', [
            'program' => $program
        ]);
    }

    /**
     * Registrasi program
     *
     * @return \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Validasi
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|max:255',
            'nama_panggilan' => 'required|max:255',
            'email' => 'required|email',
            'nomor_hp' => 'required|numeric',
        ], array_validation_messages());
        
        // Mengecek jika ada error
        if($validator->fails()){
            // Kembali ke halaman sebelumnya dan menampilkan pesan error
            return redirect()->back()->withErrors($validator->errors())->withInput($request->only([
                'nama_lengkap',
                'nama_panggilan',
                'email',
                'nomor_hp',
            ]));
        }
        // Jika tidak ada error
        else{
            // Get program
            // $program = Program::find($request->id);
            
            // Menambah data
            $user_program = new UserProgram;
            $user_program->id_program = $request->id_program;
            $user_program->nama_lengkap = $request->nama_lengkap;
            $user_program->nama_panggilan = $request->nama_panggilan;
            $user_program->email = $request->email;
            $user_program->nomor_hp = $request->nomor_hp;
            $user_program->up_at = date('Y-m-d H:i:s');
            $user_program->save();
        }

        // Redirect
        return redirect()->back()->with(['message' => 'Selamat! Anda berhasil mendaftar program pelatihan.']);
    }
}
