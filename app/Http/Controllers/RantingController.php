<?php

namespace App\Http\Controllers;
use App\Models\Ranting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RantingController extends Controller
{
    public function index(){
        {
            $dataset = Ranting::all();
            return view('dataset.dataset', compact('dataset'));
        }
    }

    // method untuk menampilkan view form tambah 
    public function create()
    {
    
        // memanggil view tambah
        return view('dataset.create');
    
    }

    // method untuk insert data ke table
    public function store(Request $request)
    {
        // insert data ke table 
        DB::table('rantings')->insert([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jabatan' => $request->jabatan,
            'NBM' => $request->NBM,
            'pekerjaan' => $request->pekerjaan
        ]);
        // alihkan halaman ke halaman dataset
        return redirect('/dataset');
    
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $dataset = Ranting::find($id);
        $dataset->nama = $request->input('nama');
        $dataset->tempat_lahir = $request->input('tempat_lahir');
        $dataset->tanggal_lahir = $request->input('tanggal_lahir');
        $dataset->jabatan = $request->input('jabatan');
        $dataset->NBM = $request->input('NBM');
        $dataset->pekerjaan = $request->input('pekerjaan');
        // Update kolom lainnya sesuai kebutuhan
        $dataset->save();
    
        return redirect('/dataset');
    }


    // // update data 
    // public function update(Request $request)
    // {
    //     // update data pegawai
    //     DB::table('rantings')->where('id',$request->id)->update([
    //         'nama' => $request->nama,
    //         'tempat_lahir' => $request->tempat_lahir,
    //         'tanggal_lahir' => $request->tanggal_lahir,
    //         'jabatan' => $request->jabatan,
    //         'NBM' => $request->NBM,
    //         'pekerjaan' => $request->pekerjaan
    //     ]);
    //     // alihkan halaman ke halaman awal
    //     return redirect('/dataset');
    // }






    // method untuk hapus data 
    public function delete($id)
    {
        // menghapus data  berdasarkan id yang dipilih
        DB::table('rantings')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman 
        return redirect('/dataset');
    }
}
