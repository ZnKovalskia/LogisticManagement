@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Stok Barang</h6>
                        <a href="{{ route('barang.create') }}" class="btn btn-outline-light btn-sm me-3">
                            Add Data
                        </a>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto Barang</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Barang</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Barang</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Barang Masuk +</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Barang Keluar -</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $item)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <div>
                                                @if ($item->foto)
                                                    <img class="avatar avatar-sm bg-gradient-dark  me-3"  src="{{ url('foto/' . $item->foto) }}" alt="Foto Barang">
                                                @else
                                                    <img class="avatar avatar-sm bg-gradient-dark  me-3"  src="{{ url('default.png') }}" alt="Default Foto">
                                                @endif
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->kode_barang }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->nama_barang }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm"> 
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->barang_masuk }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->barang_keluar }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->quantity }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a class="text-secondary font-weight-bold text-xs" href="{{ route('barang.tambah', $item->id) }}">Tambah</a>
                                            <a class="text-secondary font-weight-bold text-xs" href="{{ route('barang.kurang', $item->id) }}">Kurang</a>
                                            <a href="{{ route('barang.edit', $item->id) }}" class="text-success font-weight-bold text-xs border-0 bg-transparent">Edit</a>
                                            <form action="{{ route('barang.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button class="text-danger font-weight-bold text-xs border-0 bg-transparent" type="submit" onclick="return confirm('Are you sure?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
