@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Stok Barang</h6>
                        <a href="{{ route('barang.create') }}" class="btn btn-outline-light btn-sm me-3">
                            <i class="fas fa-plus-circle"></i> Add Data
                        </a>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Code</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Masuk</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keluar</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stock</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $item)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <div>
                                                @if ($item->foto)
                                                    <img class="avatar avatar-sm rounded-circle border border-dark" src="{{ url('foto/' . $item->foto) }}" alt="Foto Barang">
                                                @else
                                                    <img class="avatar avatar-sm rounded-circle border border-dark" src="{{ url('default.png') }}" alt="Default Foto">
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
                                            <p class="text-xs font-weight-bold mb-0 text-success"><i class="fas fa-arrow-down"></i> {{ $item->barang_masuk }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0 text-danger"><i class="fas fa-arrow-up"></i> {{ $item->barang_keluar }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0"><i class="fas fa-box"></i> {{ $item->quantity }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="btn-group" role="group">
                                            <a href="javascript:void(0);" class="btn btn-success btn-sm btnTambahStok" 
                                                data-id="{{ $item->id }}">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-sm btnKurangStok" data-id="{{ $item->id }}">
                                                <i class="fas fa-minus"></i>
                                            </a>
                                                <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-primary btn-sm" title="Edit Barang">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('barang.destroy', $item->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" type="submit" title="Hapus Barang" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
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

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Pastikan jQuery sudah siap
        $(document).ready(function () {
            // === TOMBOL TAMBAH STOK ===
            $('.btnTambahStok').click(function () {
                let barangId = $(this).data('id');
                $('#barang_id').val(barangId); // Set ID barang di input form modal
                $('#modalTambahStok').modal('show'); // Tampilkan modal
            });

            // === TOMBOL KURANG STOK ===
            $('.btnKurangStok').click(function () {
                let barangId = $(this).data('id');
                $('#kurangBarangId').val(barangId); // Set ID barang di input form modal
                $('#kurangModal').modal('show'); // Tampilkan modal
            });

            // === FORM SUBMIT TAMBAH STOK ===
            $('#formTambahStok').submit(function (event) {
                event.preventDefault();
                let formData = new FormData(this);
                let barangId = formData.get('barang_id');

                fetch("{{ url('barang/updateTambahAjax') }}/" + barangId, {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('input[name=_token]').value
                    }
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    location.reload(); // Reload halaman agar stok terupdate
                })
                .catch(error => console.error("Error:", error));
            });

            // === FORM SUBMIT KURANG STOK ===
            $('#kurangForm').submit(function (e) {
                e.preventDefault();
                let barangId = $('#kurangBarangId').val();
                let jumlah = $('#kurangJumlah').val();

                $.ajax({
                    type: "POST",
                    url: "{{ url('/barang/updateKurang') }}/" + barangId,
                    data: {
                        _token: "{{ csrf_token() }}",
                        jumlah: jumlah
                    },
                    success: function (response) {
                        alert(response.message);
                        location.reload(); // Refresh halaman setelah sukses
                    },
                    error: function (xhr) {
                        alert(xhr.responseJSON.message);
                    }
                });
            });
        });
    });
</script>




<style>
    .btn-group .btn {
        margin-right: 5px;
        padding: 6px 10px;
        font-size: 14px;
    }

    .avatar-sm {
        width: 50px;
        height: 50px;
        object-fit: cover;
    }
</style>

<!-- Modal Tambah Stok -->
<div class="modal fade" id="modalTambahStok" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Stok Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahStok">
                    @csrf
                    <input type="hidden" name="barang_id" id="barang_id">
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah:</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Tambah Stok</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Kurangi Stok -->
<div class="modal fade" id="kurangModal" tabindex="-1" aria-labelledby="kurangModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kurangModalLabel">Kurangi Stok Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="kurangForm">
                    @csrf
                    <input type="hidden" id="kurangBarangId">
                    <div class="mb-3">
                        <label for="kurangJumlah" class="form-label">Jumlah:</label>
                        <input type="number" id="kurangJumlah" name="jumlah" class="form-control" min="1" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger w-100">Tambah Stok</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
