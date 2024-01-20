<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Registration::orderBy('nama','asc')->paginate();
        if (Auth::user()->role_id == 1){
            return view('admin.index', ['data' => $data]);
        }else
            return view('user.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Registration::create([
            'nama' => $request->nama,
            'nik'  => $request->nik,
            'tgl_lahir'  => $request->tgl_lahir,
            'jns_kelamin'  => $request->jns_kelamin,
            'agama'  => $request->agama,
            'tinggal_bersama'  => $request->tinggal_bersama,
            'anak_ke'  => $request->anak_ke,
            'usia'  => $request->usia,
            'no_hp'  => $request->no_hp,

            'nama_ayah'  => $request->nama_ayah,
            'nik_ayah'  => $request->nik_ayah,
            'tgllhr_ayah'  => $request->tgllhr_ayah,
            'pendidikan_ayah'  => $request->pendidikan_ayah,
            'pekerjaan_ayah'  => $request->pekerjaan_ayah,
            'nama_ibu'  => $request->nama_ibu,
            'nik_ibu'  => $request->nik_ibu,
            'tgllhr_ibu'  => $request->tgllhr_ibu,
            'pendidikan_ibu'  => $request->pendidikan_ibu,
            'perkerjaan_ibu'  => $request->perkerjaan_ibu,

            'tinggi_bdn'  => $request->tinggi_bdn,
            'berat_bdn'  => $request->berat_bdn,
            'jrk_tempuh'  => $request->jrk_tempuh,
            'jmlh_saudara'  => $request->jmlh_saudara,

            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('registration.index')->with('success', 'Berhasil mendaftar di TK Pertiwi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Registration::findOrFail($id);
        return view('admin.show',  ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Registration::findOrFail($id);
        return view('admin.edit', ['data' => $data]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'nik'  =>'required',
            'tgl_lahir'  => 'required',
            'jns_kelamin'  => 'required',
            'agama'  => 'required',
            'tinggal_bersama'  => 'required',
            'anak_ke'  => 'required',
            'usia'  =>'required',
            'no_hp'  =>'required',

            
            'nama_ayah'  => 'required',
            'nik_ayah'  => 'required',
            'tgllhr_ayah'  => 'required',
            'pendidikan_ayah'  => 'required',
            'pekerjaan_ayah'  => 'required',
            'nama_ibu'  => 'required',
            'nik_ibu'  => 'required',
            'tgllhr_ibu'  =>'required',
            'pendidikan_ibu'  =>'required',
            'perkerjaan_ibu'  =>'required',

            'tinggi_bdn'  => 'required',
            'berat_bdn'  => 'required',
            'jrk_tempuh'  => 'required',
            'jmlh_saudara'  => 'required'
            
        ], [
            'nama.required'=>'Nama wajib diisi',
            'nik.required'=>'NIK wajib diisi',
            'tgl_lahir.required'=>'Tanggal lahir wajib diisi',
            'jns_kelamin.required'=>'Jenis kelamin wajib diisi',
            'agama.required'=>'Agama wajib diisi',
            'tinggal_bersama.required'=>'Tigggal bersama wajib diisi',
            'anak_ke.required'=>'Anak kewajib diisi',
            'usia.required'=>'Usia wajib diisi',
            'no_hp.required'=>'No hp wajib diisi',

            'nama_ayah.required'=>'Nama ayah wajib diisi',
            'nik_ayah.required'=>'NIK ayah wajib diisi',
            'tgllhr_ayah.required'=>'Tanggal lahir ayahwajib diisi',
            'pendidikan_ayah.required'=>'Pendidikan ayah wajib diisi',
            'pekerjaan_ayah.required'=>'Pekerjaan ayah wajib diisi',
            'nama_ibu.required'=>'Nama ibu wajib diisi',
            'nik_ibu.required'=>'NIK ibuwajib diisi',
            'tgllhr_ibu.required'=>'Tnggal lahir ibu wajib diisi',
            'pendidikan_ibu.required'=>'Pendidikan ibu wajib diisi',
            'perkerjaan_ibu.required'=>'Pekerjaan wajib diisi',

            'tinggi_bdn.required'=>'Tinggi badan wajib diisi',
            'berat_bdn.required'=>'Berat badan wajib diisi',
            'jrk_tempuh.required'=>'Jarak tempuh wajib diisi',
            'jmlh_saudara.required'=>'Jumlah saudara wajib diisi',
        ]);
        $data = [
            'nama' => $request->nama,
            'nik'  => $request->nik,
            'tgl_lahir'  => $request->tgl_lahir,
            'jns_kelamin'  => $request->jns_kelamin,
            'agama'  => $request->agama,
            'tinggal_bersama'  => $request->tinggal_bersama,
            'anak_ke'  => $request->anak_ke,
            'usia'  => $request->usia,
            'no_hp'  => $request->no_hp,

            'nama_ayah'  => $request->nama_ayah,
            'nik_ayah'  => $request->nik_ayah,
            'tgllhr_ayah'  => $request->tgllhr_ayah,
            'pendidikan_ayah'  => $request->pendidikan_ayah,
            'pekerjaan_ayah'  => $request->pekerjaan_ayah,
            'nama_ibu'  => $request->nama_ibu,
            'nik_ibu'  => $request->nik_ibu,
            'tgllhr_ibu'  => $request->tgllhr_ibu,
            'pendidikan_ibu'  => $request->pendidikan_ibu,
            'perkerjaan_ibu'  => $request->perkerjaan_ibu,

            'tinggi_bdn'  => $request->tinggi_bdn,
            'berat_bdn'  => $request->berat_bdn,
            'jrk_tempuh'  => $request->jrk_tempuh,
            'jmlh_saudara'  => $request->jmlh_saudara,

            // 'user_id' => Auth::user()->id,
        ];
        Registration::where('id',$id)->update($data);
        return redirect()->route('registration-admin.index')->with('success', 'Berhasil mengubah data siswa');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Registration::where('id', $id)->delete();

        // $data = Registration::findOrFail($id);
        // $data->delete();
        return redirect()->route('registration-admin.index')->with('success', 'Berhasil hapus data');
    }
}
