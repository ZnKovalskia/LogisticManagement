@extends('layout.app')

@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
            <p>{{ $err }}</p>
        @endforeach
    </div>
@endif
<form action="{{ url('staff/' . $data->nip) }}" method="POST" enctype="multipart/form-data" class="form-container">
    @csrf
    @method('PUT')
    <div class="card" style="border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); margin: 20px 0;">
        <div class="card-header" style="background-color: #42424a; color: white; padding: 15px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
            <h6 style="margin: 0;">Edit Staff</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Nama Staff</label>
                <input type="text" class="form-control" name="nama_pegawai" value="{{ $data->nama_pegawai }}" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email_pegawai" value="{{ $data->email_pegawai }}" required>
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <select name="role_id" class="custom-select">
                    @foreach ($role as $item)
                        <option value="{{ $item->id }}" {{ $data->role_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama_jabatan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="custom-select" required>
                    <option value="Pria" {{ $data->gender == 'Pria' ? 'selected' : '' }}>Pria</option>
                    <option value="Wanita" {{ $data->gender == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                </select>
            </div>

            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" class="form-control" name="no_telepon" value="{{ $data->no_telepon }}" required>
            </div>

            @if($data->foto)
                <div class="form-group">
                    <label>Foto Saat Ini</label>
                    <div>
                        <img class="img-thumbnail" src="{{ url('foto') . '/' . $data->foto }}" alt="Foto Staff">
                    </div>
                </div>
            @endif

            <div class="form-group">
                <label for="foto">Upload Foto Baru (Opsional)</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <button type="submit" class="btn btn-gradient-dark btn-sm text-white">
                 Save
            </button>
            <a href="{{ route('staff.index') }}" class="btn btn-gradient-dark btn-sm text-white">
                 Cancel
            </a>
        </div>
    </div>
</form>

<style>
    .card-header {
        background-color: #42424a; /* Warna latar belakang header */
        color: white; /* Warna teks header */
    }
    .form-container {
        max-width: 600px;
        margin: auto;
    }

    .btn-gradient-dark {
        background: linear-gradient(195deg, #42424a 0%, #191919 100%);
        border: none;
        padding: 8px 16px;
        font-size: 14px;
        transition: background 0.3s;
    }

    .btn-gradient-dark:hover {
        background: linear-gradient(195deg, #5a5a5a 0%, #2a2a2a 100%);
    }

    .img-thumbnail {
        max-width: 100px;
        max-height: 100px;
        border-radius: 8px;
        margin-top: 5px;
    }
</style>
@endsection
