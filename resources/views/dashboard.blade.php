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
                            <p class="text-sm mb-0 text-capitalize">Stock Available</p>
                            <h4 class="mb-0">7240</h4>
                        </div>
                        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                            <i class="material-symbols-rounded opacity-10">inventory_2</i>
                        </div>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-2 ps-3">
                    <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">827 </span>than last week</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-2 ps-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm mb-0 text-capitalize">Outgoing stock</p>
                            <h4 class="mb-0">2300</h4>
                        </div>
                        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                            <i class="material-symbols-rounded opacity-10">inventory</i>
                        </div>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-2 ps-3">
                    <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+728 </span>than last month</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-2 ps-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm mb-0 text-capitalize">Ads Views</p>
                            <h4 class="mb-0">3,462</h4>
                        </div>
                        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                            <i class="material-symbols-rounded opacity-10">leaderboard</i>
                        </div>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-2 ps-3">
                    <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder">-2% </span>than yesterday</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-header p-2 ps-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm mb-0 text-capitalize">Sales</p>
                            <h4 class="mb-0">$103,430</h4>
                        </div>
                        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                            <i class="material-symbols-rounded opacity-10">weekend</i>
                        </div>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-2 ps-3">
                    <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+5% </span>than yesterday</p>
                </div>
            </div>
        </div>
    </div>
@endsection