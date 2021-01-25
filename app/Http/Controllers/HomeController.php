<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Support\Str;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dosen()
    { 
        $dosen = Dosen::paginate(5); 
        // dd($dosen);
        return view('dosen', compact('dosen')); 
    }
    public function create()
    {
        $mtkl = Matkul::all();
        return view('createdosen', compact('mtkl'));
    }
    public function store(Request $request)
    {
        $post = new Dosen;
        $post->matkul_id = $request->matkul_id;
        $post->nip = $request->nip;
        $post->nama = $request->nama;
        $post->alamat = $request->alamat; 

        $post->save();
        return redirect('dosen');
    }
}
