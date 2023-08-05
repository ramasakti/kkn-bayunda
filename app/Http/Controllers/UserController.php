<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ranting;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataset = ranting::all();
        return view('dataset.dataset', [
            'dataset' => $dataset
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataset.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table 
        DB::table('ranting')->insert([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jabatan' => $request->jabatan,
            'NBM' => $request->NBM,
            'pekerjaan' => $request->pekerjaan
        ]);
        // alihkan halaman ke halaman dataset
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataset = ranting::where('id', $id)->first();
        return view('dataset.edit')->with('dataset',$dataset);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataset = ranting::find($id);
        $dataset->nama = $request->input('nama');
        $dataset->tempat_lahir = $request->input('tempat_lahir');
        $dataset->tanggal_lahir = $request->input('tanggal_lahir');
        $dataset->jabatan = $request->input('jabatan');
        $dataset->NBM = $request->input('NBM');
        $dataset->pekerjaan = $request->input('pekerjaan');
        // Update kolom lainnya sesuai kebutuhan
        $dataset->save();
    
        return redirect('/')->with('success', 'Berhasil update data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ranting::where('id', $id)->delete();
        return back()->with('success', 'Berhasil melakukan delete data');
    }
}
