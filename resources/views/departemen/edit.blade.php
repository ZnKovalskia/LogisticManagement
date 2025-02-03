@extends('layouts.app')

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
        <div class="card-footer" style="padding: 15px; display: flex; justify-content: space-between;">
            <button type="submit" style="background-color: #007bff; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer;">
                <span class="material-symbols-rounded" style="vertical-align: middle;">save</span> Update
            </button>
            <a href="{{ route('departemen.index') }}" style="background-color: #6c757d; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; text-decoration: none;">
                <span class="material-symbols-rounded" style="vertical-align: middle;">cancel</span> Cancel
            </a>
        </div>
    </div>
</form>

<style>
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