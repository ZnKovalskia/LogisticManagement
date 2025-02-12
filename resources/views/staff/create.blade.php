@extends('layouts.app')
@section('content')
<form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card shadow mb-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                            <h6 class="text-white text-capitalize ps-3">Formulir Tambah Staff</h6>
                        </div>
                    </div>
                    <div class="card-body px-4 pb-2">
                        <!-- Nama Staff -->
                        <div class="form-group">
                            <label class="form-label">Nama Staff</label>
                            <input type="text" class="form-control" name="nama_pegawai" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email_pegawai" required>
                        </div>

                        <!-- Jabatan -->
                        <div class="form-group">
                            <label class="form-label">Jabatan</label>
                            <select name="role_id" class="custom-select">
                                        @foreach ($role as $item)
                                        <option value="{{$item->id}}">{{$item->nama_jabatan}}</option>
                                        @endforeach
                                    </select>
                        </div>

                        <!-- Gender -->
                        <div class="form-group">
                            <label class="form-label">Gender</label>
                            <select name="gender" class="custom-select" required>
                                <option value="" selected disabled hidden>--Pilih Gender--</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>

                        <!-- Nomor Telepon -->
                        <div class="form-group">
                            <label class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" name="no_telepon" required>
                        </div>

                        <!-- Upload Foto -->
                        <div class="form-group">
                            <label for="foto" class="form-label">Upload Foto Staff</label>
                            <input type="file" class="form-control-file" id="foto" name="foto">
                        </div>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="card-footer d-flex justify-content-between">
                        <button type="submit" class="btn btn-gradient-dark btn-sm" style="font-family: 'Inter', sans-serif; color: white;">
                        <span class="material-symbols-rounded me-1">save</span> Save
                        </button>
                    </div>

                    <!-- Pesan Error -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
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
</style>
@endsection
