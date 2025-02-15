@extends('layout.app')

@section('content')
<div class="container form-container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barang.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card shadow-sm border-0 rounded">
            <div class="card-header bg-dark text-white">
                <h6 class="mb-0">Edit Barang</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Barang</label>
                    <div class="custom-file">
                        <input type="file" name="foto" id="foto" class="custom-file-input" accept="image/*" onchange="previewImage(event)">
                        <label class="custom-file-label" for="foto">Pilih Foto</label>
                    </div>
                    <div class="mt-3 text-center">
                        <p class="small text-muted">Preview Foto:</p>
                        <img id="fotoPreview" class="img-thumbnail img-preview" 
                             src="{{ $barang->foto ? asset('foto/' . $barang->foto) : 'https://via.placeholder.com/80' }}" 
                             alt="Foto Barang">
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <button type="submit" class="btn btn-gradient-dark btn-sm text-white">Update</button>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary btn-sm">Cancel</a>
            </div>
        </div>
    </form>
</div>

<style>
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
    
    .img-preview {
        max-width: 80px;
        max-height: 80px;
        border-radius: 6px;
        margin-top: 5px;
    }

    .custom-file-label::after {
        content: "Browse";
    }
</style>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            document.getElementById('fotoPreview').src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
