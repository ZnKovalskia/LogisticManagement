<?php

namespace App\Http\Controllers;

use App\Models\testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $testimoni = Testimoni::all(); // Ambil semua data testimoni
        return view('frontend.index', compact('testimoni')); // Kirim ke view
    }

    public function admin()
    {
        //
        $testimoni = Testimoni::all();
        return view('testimonial.index',compact('testimoni'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_testimoni' => 'required|string|max:255',
            'email_testimoni' => 'required|email|max:255',
            'judul_pesan' => 'required|string',
            'pesan' => 'required|string',
        ]);
    
        // Simpan data ke database
        Testimoni::create($request->all());
    
        return redirect()->back()->with('success', 'Testimoni berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testimoni $testimoni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(testimoni $testimoni)
    {
        //
    }
}
