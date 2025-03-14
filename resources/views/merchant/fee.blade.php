@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-8">
                <h2 class="mb-0">List Merchant Fee</h2>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search by merchant...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fee Information Card -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="mb-0 mr-2">Biaya Merchant:</h5>
                            <span class="badge badge-primary p-2">0.7%</span>
                        </div>
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
