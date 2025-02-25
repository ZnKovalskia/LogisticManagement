<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\testimoni;
use App\Models\laporan;
use App\Models\supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $barang = Barang::all();
        return view('barang.index',['barang'=>$barang]);
    }


    public function barang()
    {
        $barang = Barang::all();
        $totalBarang = Barang::sum('quantity');
        $totalBarangMasuk = Barang::sum('barang_masuk');
        $totalBarangKeluar = Barang::sum('barang_keluar');
        $totalTestimoni = Testimoni::count();

        $laporanBarangMasuk = Laporan::where('jenis_laporan', 'masuk')->latest()->take(5)->get();
        $laporanBarangKeluar = Laporan::where('jenis_laporan', 'keluar')->latest()->take(5)->get();

        return view('dashboard', compact('barang', 'totalBarang', 'totalBarangMasuk', 'totalBarangKeluar', 'totalTestimoni', 'laporanBarangMasuk', 'laporanBarangKeluar'));
    }
    /**
     * Show the form for creating a new resource.
     */

    public function barangFront()
    {
        $barang = Barang::all();
        $totalBarang = Barang::sum('quantity');
        $testimoni = Testimoni::all();
        return view('frontend.index', compact('barang', 'totalBarang', 'testimoni'));
    } 

    public function create()
    {
        //
        $supplier = Supplier::all();
        return view('barang.create', ['supplier'=>$supplier]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode_barang' => 'required|unique:barang',
            'nama_barang' => 'required',
            'supplier_id' => 'required',
            'foto'=>'required|mimes:jpeg,jpg,png,gif',
        ],[
            'kode_barang.required' => 'Kode Barang Wajib Diisi',
            'nama_barang.required' => 'Nama Barang Wajib Diisi',
            'supplier_id.required' => 'Supplier Wajib Diisi',
            'foto.required'=>'Foto Diperbolehkan Berekstensi jpeg,jpg,png,gif',
            'foto.mimes'=>'Foto Diperbolehkan Berekstensi jpeg,jpg,png,gif',
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ywdhis'). "." .$foto_ekstensi;
        $foto_file->move(public_path('foto'),$foto_nama);

        $data = [
            'barang_masuk'=>$request->input('barang_masuk', 0),
            'barang_keluar'=>$request->input('barang_keluar', 0),
            'kode_barang'=>$request->input('kode_barang'),    
            'nama_barang'=>$request->input('nama_barang'),    
            'supplier_id'=>$request->input('supplier_id'),    
            'foto'=>$foto_nama,
        ];
        Barang::create($data);
        return redirect('barang')->with('success','Barang Berhasil Ditambahkan')->with('success', 'Barang berhasil ditambahkan');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $supplier = Supplier::all();
        $data = Barang::where('id',$id)->first();

        
        
        return view('barang.edit',['supplier'=>$supplier, 'data'=>$data]);

    }

    /**c
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_barang' => 'required',
            'supplier_id' => 'required',
            'foto'=>'|mimes:jpeg,jpg,png,gif',
        ],[
            'nama_barang.required' => 'Nama Barang Wajib Diisi',
            'supplier_id.required' => 'Supplier Wajib Diisi',
            'foto.mimes'=>'Foto Diperbolehkan Berekstensi jpeg,jpg,png,gif',
        ]);
        $barang = barang::where('id', $id)->first();
        // Update nama barang
        $foto_nama = $barang->foto;

        $data = [
            'barang_masuk'=>$request->input('barang_masuk', 0),
            'barang_keluar'=>$request->input('barang_keluar', 0),
            'nama_barang'=>$request->input('nama_barang'),    
            'supplier_id'=>$request->input('supplier_id'),    
            'foto'=>$foto_nama,
        ];

        // Update foto jika ada file baru
        if ($request->hasFile('foto')) {
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ywdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);
    
            if (File::exists(public_path('foto') . '/' . $barang->foto)) {
                File::delete(public_path('foto') . '/' . $barang->foto);
            }
    
            $data['foto'] = $foto_nama;
        }

        // Simpan perubahan
        barang::where('id', $id)->update($data);
        return redirect('barang')->with('success', 'Barang Berhasil Dirubah');
    }

    public function updateTambahAjax(Request $request, $id)
{
    $barang = Barang::findOrFail($id);

    $request->validate([
        'jumlah' => 'required|integer|min:1'
    ]);

    $jumlah = $request->input('jumlah');

    // Tambah stok barang
    $barang->barang_masuk += $jumlah;
    $barang->quantity += $jumlah;
    $barang->save();

    // Simpan ke laporan
    Laporan::create([
        'kode_barang' => $barang->kode_barang,
        'nama_barang' => $barang->nama_barang,
        'jumlah' => $jumlah,
        'jenis_laporan' => 'masuk',
    ]);

    // Kirim respons JSON agar AJAX bisa menampilkan notifikasi tanpa reload
    return response()->json([
        'success' => true,
        'message' => 'Stok berhasil ditambahkan!',
        'new_quantity' => $barang->quantity
    ]);
}


    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        if (!$barang) {
            return redirect()->route('barang.index')->with('error', 'Data tidak ditemukan');
        }

        if ($barang->foto && File::exists(public_path('foto/' . $barang->foto))) {
            File::delete(public_path('foto').'/'.$barang->foto);
        }

        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus');
    }

    public function tambah($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.tambah', compact('barang'));
    }

    public function kurang($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.kurang', compact('barang'));
    }

    public function updateTambah(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $jumlah = $request->input('jumlah');

        $barang->barang_masuk += $request->input('jumlah');
        $barang->quantity += $request->input('jumlah');
        $barang->save();

        Laporan::create([
            'kode_barang' => $barang->kode_barang,
            'nama_barang' => $barang->nama_barang,
            'jumlah' => $jumlah,
            'jenis_laporan' => 'masuk',
        ]);

        return redirect()->route('barang.index')->with('success', 'Stok barang berhasil ditambahkan');
    }

    public function updateKurang(Request $request, $id)
{
    $barang = Barang::findOrFail($id);

    $request->validate([
        'jumlah' => 'required|integer|min:1'
    ]);

    $jumlah = $request->input('jumlah');

    // Cek apakah stok cukup untuk dikurangi
    if ($barang->quantity < $jumlah) {
        return response()->json([
            'success' => false,
            'message' => 'Stok tidak mencukupi!'
        ], 400);
    }

    // Kurangi stok barang
    $barang->barang_keluar += $jumlah;
    $barang->quantity -= $jumlah;
    $barang->save();

    // Simpan ke laporan
    Laporan::create([
        'kode_barang' => $barang->kode_barang,
        'nama_barang' => $barang->nama_barang,
        'jumlah' => $jumlah,
        'jenis_laporan' => 'keluar',
    ]);

    // Cek apakah request dari AJAX
    if ($request->ajax()) {
        return response()->json([
            'success' => true,
            'message' => 'Stok berhasil dikurangi!',
            'new_quantity' => $barang->quantity
        ]);
    }

    return redirect()->route('barang.index')->with('success', 'Stok barang berhasil dikurangi');
}
}
