@extends('layout.app')

@section('content')
<form action="{{ url('departemen/' . $data->id) }}" method="POST" style="max-width: 600px; margin: auto;">
    @csrf
    @method('PUT')
    <div class="card" style="border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); margin: 20px 0;">
        <div class="card-header" style="background-color: #42424a; color: white; padding: 15px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
            <h6 style="margin: 0;">Edit Departemen</h6>
        </div>
        <div class="card-body" style="padding: 20px;">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="nama_departemen" style="font-weight: bold;">Departemen Name</label>
                <input type="text" class="form-control" id="nama_departemen" name="nama_departemen" value="{{ old('nama_departemen', $data->nama_departemen) }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                @error('nama_departemen')
                    <div style="color: red; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between">
                    <button type="submit" class="btn btn-gradient-dark btn-sm" style="font-family: 'Inter', sans-serif; color: white;">
                         Save
                    </button>
                    <a href="{{ route('departemen.index') }}" class="btn btn-gradient-dark btn-sm" style="font-family: 'Inter', sans-serif; color: white;">
                         Cancel
                    </a>
                </div>
    </div>
</form>

<style>
    .btn-gradient-dark {
        background-image: linear-gradient(195deg, #42424a 0%, #191919 100%);
        border: none;
        padding: 0.375rem 0.75rem; 
        transition: background-color 0.3s;
    }

    .btn-gradient-dark:hover {
        background-image: linear-gradient(195deg, #5a5a5a 0%, #2a2a2a 100%); /* Warna saat hover */
    }

    .card {
        border-radius: 8px; /* Mengatur border radius untuk card */
    }

    .card-header {
        background-color: #42424a; /* Warna latar belakang header */
        color: white; /* Warna teks header */
    }

    .form-control {
        width: 100%; /* Lebar input */
        padding: 10px; /* Padding untuk input */
        border: 1px solid #ccc; /* Border input */
        border-radius: 4px; /* Border radius untuk input */
    }

    .form-control:focus {
        border-color: #007bff; /* Warna border saat fokus */
        outline: none; /* Menghilangkan outline default */
    }

    button, a {
        border-radius: 4px; /* Border radius untuk tombol */
        text-align: center; /* Menyelaraskan teks di tengah */
        display: inline-flex; /* Menggunakan flexbox untuk tombol */
        align-items: center; /* Menyelaraskan ikon dan teks */
    }

    button:hover {
        background-color: #0056b3; /* Warna saat hover tombol update */
    }

    a:hover {
        background-color: #5a6268; /* Warna saat hover tombol batal */
    }
</style>
@endsection