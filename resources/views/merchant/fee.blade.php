@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h4>List MDR Merchant</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mechant</th>
                                <th>MDR QRIS</th>
                                <th>MDR Dana</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->merchant_name}}</td>
                                <td>{{$item->mdr_rate}}%</td>
                                <td>{{$item->mdr_rate}}%</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Fee Information Card -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 mr-2">Biaya Admin:</h5>
                            <span class="badge badge-info p-2">0 - 5000 Rupiah</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alert Info -->
        <div class="alert alert-warning" role="alert">
            <div class="d-flex">
                <div class="mr-3">
                    <i class="fa fa-info-circle fa-2x"></i>
                </div>
                <div>
                    <p class="mb-1">Biaya Admin 0 Rupiah untuk Pengiriman ke Bank (BCA, BRI, MANDIRI, CIMB NIAGA,
                        PERMATA)</p>
                    <p class="mb-0">Biaya Admin 5000 Rupiah selain bank diatas</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        $(document).ready(function() {
            var table = $('#dataTable').DataTable();
        });
    </script>
@endpush
