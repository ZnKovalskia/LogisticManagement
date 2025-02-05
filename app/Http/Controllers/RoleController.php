<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $role = Role::all();
        return view('role.index', ['role'=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //
        $request->validate([
            'nama_jabatan' => 'required',
        ]);
        Role::create ([
            'nama_jabatan' => $request->nama_jabatan,
        ]);

        return redirect ('role')->with ('success', 'Jabatan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = Role::where('id', $id)->first();
        return view('role.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama_jabatan' => 'required',
        ]);
        $data = ([
            'nama_jabatan' => $request->nama_jabatan,
        ]);

        Role::where('id', $id)->update($data);
        return redirect ('role')->with ('success', 'Jabatan Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Role::where('id',$id)->delete();
        return redirect('role')->with('success', 'Jabatan Berhasil Dihapus');
    }
}
