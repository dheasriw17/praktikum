<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mahasiswa;

use App\Models\Dosen;

use App\Models\Organization;

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
        return view('adminLayout/index');
    }

    public function detail()
    {
        return view('detail');
    }

    public function list()
    {
        $mahasiswa = Mahasiswa::paginate(5);
        return view('list', compact('mahasiswa'));
    }

    public function dosen()
    {
        $dosen = dosen::all();
        return view('dosen', compact('dosen'));
    }

    public function create()
    {
        $org = Organization::all();
        return view('createmhs', compact('org'));
    }

    public function store(Request $request)
    {
        $post = new Mahasiswa;
        $post->organization_id = $request->organization_id;
        $post->npm = $request->npm;
        $post->name = $request->name;
        $post->class = $request->class;
        $post->alamat = $request->alamat;
        $post->save();
        return redirect('/list');
    }

    public function detail1(Mahasiswa $mahasiswa)
    {
        $org = Organization::all();
        return view('editmhs', compact('mahasiswa', 'org'));
    }

    public function update(Mahasiswa $mahasiswa)
    {
        $mhs = request()->all();
        $mahasiswa->update($mhs);
        return redirect('/list');
    }

    public function delete(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('/list');
    }
}
