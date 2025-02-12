@extends('layouts.app')

@section('content')
@if($errors->any())
    @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
@endif
<form action="{{ url('staff/' . $data->nip) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6>Form Edit Staff</h6>
                    </div>
                    <div class="card-body">
                        <!-- Nama Staff -->
                        <div class="form-group">
                            <label>Nama Staff</label>
                            <input type="text" class="form-control" name="nama_pegawai" value="{{ $data->nama_pegawai }}" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email_pegawai" value="{{ $data->email_pegawai }}" required>
                        </div>

                        <!-- Jabatan -->
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select name="role_id" class="custom-select">
                                @foreach ($role as $item)
                                    <option value="{{ $item->id }}" 
                                        {{ $data->role_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama_jabatan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Gender -->
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="custom-select" required>
                                <option value="Pria" {{ $data->gender == 'Pria' ? 'selected' : '' }}>Pria</option>
                                <option value="Wanita" {{ $data->gender == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                            </select>
                        </div>

                        <!-- Nomor Telepon -->
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="no_telepon" value="{{ $data->no_telepon }}" required>
                        </div>

                        <!-- Foto Lama -->
                        @if($data->foto)
                            <div class="form-group">
                                <label>Foto Saat Ini</label>
                                <div>
                                    <img style="max-width: 100px; max-height: 100px;" src="{{ url('foto') . '/' . $data->foto }}" alt="Foto Staff">
                                </div>
                            </div>  
                        @endif

                        <!-- Upload Foto Baru -->
                        <div class="form-group">
                            <label for="foto">Upload Foto Baru (Opsional)</label>
                            <input type="file" class="form-control-file" id="foto" name="foto">
                        </div>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('staff.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </div>
            </div>
        </div>            
    </div>
</form>
@endsection
