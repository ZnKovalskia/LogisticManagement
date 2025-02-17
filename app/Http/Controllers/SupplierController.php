<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $supplier = supplier::all();
        return view('supplier.index', ['supplier'=>$supplier]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_supplier' => 'required',
        ]);
        Supplier::create ([
            'nama_supplier' => $request->nama_supplier,
        ]);

        return redirect ('supplier')->with ('success', 'Supplier Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = Supplier::where('id', $id)->first();
        return view('supplier.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama_supplier' => 'required',
        ]);
        $data = ([
            'nama_supplier' => $request->nama_supplier,
        ]);

        Supplier::where('id', $id)->update($data);
        return redirect ('supplier')->with ('success', 'Supplier Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Supplier::where('id',$id)->delete();
        return redirect('supplier')->with('success', 'Supplier Berhasil Dihapus');
    }
}
