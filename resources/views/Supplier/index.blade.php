@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Supplier</h6>
                        <a href="{{ route('supplier.create') }}" class="btn btn-outline-light btn-sm me-3">
                            Add Data
                        </a>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Supplier</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                @foreach($supplier as $index => $supplier)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <h6 class="mb-0 text-sm">{{$no++}}</h6>
                                        </td>
                                        <td class="align-middle text-center">
                                            <h6 class="mb-0 text-sm">{{ $supplier->nama_supplier }}</h6>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="{{ route('supplier.edit', $supplier->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit department">
                                                Edit
                                            </a>
                                            |
                                            <form action="{{ url('supplier/' . $supplier->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger font-weight-bold text-xs border-0 bg-transparent" onclick="return confirm('Are you sure?')">
                                                    Delete
                                                </button>
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