@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="ms-3">
            <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>
            <p class="mb-4">Check the sales, value and bounce rate by country.</p>
        </div>
    </div>
    <div class="row"> <!-- Tambahkan row di sini -->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-2 ps-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm mb-0 text-capitalize">Total Seluruh Stok Barang</p>
                            <h4 class="mb-0">{{ $totalBarang }}</h4>
                        </div>
                        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                            <i class="material-symbols-rounded opacity-10">inventory_2</i>
                        </div>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-2 ps-3">
                    <p class="mb-0 text-sm">Total Stok Barang yang tersedia</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-2 ps-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm mb-0 text-capitalize">Seluruh Stok Masuk</p>
                            <h4 class="mb-0 text-success font-weight-bolder">{{ $totalBarangMasuk }}</h4>
                        </div>
                        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                            <i class="material-symbols-rounded opacity-10">inventory</i>
                        </div>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-2 ps-3">
                    <p class="mb-0 text-sm mb-0 text-sm text-success font-weight-bolder"><span id="laporanBarangMasukText"></span></p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-2 ps-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm mb-0 text-capitalize">Seluruh Stok Keluar</p>
                            <h4 class="mb-0 text-danger font-weight-bolder">{{ $totalBarangKeluar }}</h4>
                        </div>
                        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                            <i class="material-symbols-rounded opacity-10">leaderboard</i>
                        </div>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-2 ps-3">
                    <p class="mb-0 text-sm mb-0 text-sm text-danger font-weight-bolder"><span id="laporanBarangKeluarText"></span></p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-header p-2 ps-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm mb-0 text-capitalize">Total Testimoni</p>
                            <h4 class="mb-0">{{ $totalTestimoni }}</h4>
                        </div>
                        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                            <i class="material-symbols-rounded opacity-10">weekend</i>
                        </div>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-2 ps-3">
                    <p class="mb-0 text-sm text-success font-weight-bolder">Saran & Kritikan Pengguna</p>
                </div>
            </div>
        </div>
        
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let laporanMasuk = @json($laporanBarangMasuk);
        let laporanKeluar = @json($laporanBarangKeluar);

        let indexMasuk = 0;
        let indexKeluar = 0;

        function updateLaporanMasuk() {
            if (laporanMasuk.length > 0) {
                let laporan = laporanMasuk[indexMasuk];
                document.getElementById('laporanBarangMasukText').innerText =
                    `Barang ${laporan.nama_barang} masuk sebanyak ${laporan.jumlah} unit`;
                indexMasuk = (indexMasuk + 1) % laporanMasuk.length;
            }
        }

        function updateLaporanKeluar() {
            if (laporanKeluar.length > 0) {
                let laporan = laporanKeluar[indexKeluar];
                document.getElementById('laporanBarangKeluarText').innerText =
                    `Barang ${laporan.nama_barang} keluar sebanyak ${laporan.jumlah} unit`;
                indexKeluar = (indexKeluar + 1) % laporanKeluar.length;
            }
        }

        setInterval(updateLaporanMasuk, 5000);
        setInterval(updateLaporanKeluar, 5000);

        updateLaporanMasuk();
        updateLaporanKeluar();
    });
</script>