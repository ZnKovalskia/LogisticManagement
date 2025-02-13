<?php

namespace App\Http\Controllers;

use App\Models\staff;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $staff = Staff::all();
        return view('staff.index',['staff'=>$staff]);
    }

    public function team()
    {
        //
        $staff = Staff::all();
        return view('frontend.team',['staff'=>$staff]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $role = Role::all();

        return view('staff.create',['role'=>$role]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'foto'=>'required|mimes:jpeg,jpg,png,gif',
            'nama_pegawai'=>'required',
            'email_pegawai'=>'required',
            'role_id'=>'required',
            'gender'=>'required',
            'no_telepon'=>'required',
        ],[
            'foto.required'=>'Foto Wajib Diisi',
            'foto.mimes'=>'Foto Diperbolehkan Berekstensi jpeg,jpg,png,gif',
            'nama_pegawai.required'=>'Nama Pegawai Wajib Diisi',
            'email_pegawai.required'=>'Email Pegawai Wajib Diisi',
            'role_id.required'=>'Jabatan Wajib Diisi',
            'gender.required'=>'Data Jenis Kelamin Wajib Diisi',
            'no_telepon.required'=>'Nomor Telepon Wajib Diisi',
        ]);

        $nip = 'STF' . str_pad(Staff::count() + 1, 5, '0', STR_PAD_LEFT);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ywdhis'). "." .$foto_ekstensi;
        $foto_file->move(public_path('foto'),$foto_nama);

        $data =[
            'foto' =>$foto_nama,
            'nama_pegawai'=>$request->input('nama_pegawai'),
            'email_pegawai'=>$request->input('email_pegawai'),
            'role_id'=>$request->input('role_id'),
            'gender'=>$request->input('gender'),
            'no_telepon'=>$request->input('no_telepon'),
        ];
        Staff::create($data);
        return redirect('staff')->with('success','Staff Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $role = Role::all();
        $data = Staff::where('nip',$id)->first();
        return view('staff.edit',['role'=>$role,])->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'foto'=>'|mimes:jpeg,jpg,png,gif',
            'nama_pegawai'=>'required',
            'email_pegawai'=>'required',
            'role_id'=>'required',
            'gender'=>'required',
            'no_telepon'=>'required',
        ],[
            'foto.mimes'=>'Foto Diperbolehkan Berekstensi jpeg,jpg,png,gif',
            'nama_pegawai.required'=>'Nama Pegawai Wajib Diisi',
            'email_pegawai.required'=>'Alamat Pegawai Wajib Diisi',
            'role_id.required'=>'Jabatan Wajib Diisi',
            'gender.required'=>'Data Jenis Kelamin Wajib Diisi',
            'no_telepon.required'=>'No Telepon Wajib Diisi',
        ]);

        $staff = Staff::where('nip', $id)->first();
        $foto_nama = $staff->foto;

        $data = [
            'foto' => $foto_nama, 
            'nama_pegawai' => $request->nama_pegawai,
            'email_pegawai' => $request->email_pegawai,
            'role_id' => $request->role_id,
            'gender' => $request->gender,
            'no_telepon' => $request->no_telepon,
        ];

        if ($request->hasFile('foto')) {
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ywdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);
    
            if (File::exists(public_path('foto') . '/' . $staff->foto)) {
                File::delete(public_path('foto') . '/' . $staff->foto);
            }
    
            $data['foto'] = $foto_nama;
        }

        Staff::where('nip', $id)->update($data);
        return redirect('staff')->with('success', 'Pegawai Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $data = Staff::where('nip',$id)->first();
        if ($data && File::exists(public_path('foto/' . $data->foto))) {
        File::delete(public_path('foto').'/'.$data->foto);
        }

        Staff::where('nip', $id)->delete();
        return redirect ('staff')->with ('success', 'Pegawai Berhasil Dihapus');
    }
}
