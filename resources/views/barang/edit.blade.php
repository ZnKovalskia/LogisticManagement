@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Barang</h2>
    
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

        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required>
        </div>

        <div class="form-group">
            <label for="foto">Foto Barang</label>
            <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
            @if($barang->foto)
                <p>Foto Saat Ini:</p>
                <img src="{{ asset('foto/' . $barang->foto) }}" alt="Foto Barang" width="150">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
