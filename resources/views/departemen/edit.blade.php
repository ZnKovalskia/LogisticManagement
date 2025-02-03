@extends('layouts.app')

@section('content')
<form action="{{url ('departemen/'. $data->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Edit Departemen</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class="form-group">
                            <label for="nama_departemen">Nama Departemen</label>
                            <input type="text" class="form-control @error('nama_departemen') is-invalid @enderror" id="nama_departemen" name="nama_departemen" value="{{ old('nama_departemen', $data->nama_departemen) }}" required>
                            @error('nama_departemen')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('departemen.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
