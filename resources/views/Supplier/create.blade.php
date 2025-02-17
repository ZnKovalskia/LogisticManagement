@extends('layouts.app')

@section('content')
<form action="{{ route('supplier.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Add Departemen</h6>
                    </div>
                </div>
                <div class="card-body px-4 pb-2">
                    <div class="form-group">
                        <label for="nama_supplier" class="form-label">Departemen Name</label>
                        <input type="text" class="form-control @error('nama_supplier') is-invalid @enderror" id="nama_supplier" name="nama_supplier" value="{{ old('nama_supplier') }}" required>
                        @error('nama_supplier')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <button type="submit" class="btn btn-gradient-dark btn-sm" style="font-family: 'Inter', sans-serif; color: white;">
                        <span class="material-symbols-rounded me-1">save</span> Save
                    </button>
                    <a href="{{ route('supplier.index') }}" class="btn btn-gradient-dark btn-sm" style="font-family: 'Inter', sans-serif; color: white;">
                        <span class="material-symbols-rounded me-1">cancel</span> Cancel
                    </a>
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