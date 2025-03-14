@extends('layouts.app')

@section('content')
<div class="container">
    <!-- begin::Card-->
    <div class="card card-custom overflow-hidden">
        <div class="card-body p-0">
            <!-- begin: Invoice-->
            <!-- begin: Invoice header-->
            <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0" style="background-image: url({{asset('assets/media/bg/bg-6.jpg')}});">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between">
                        <!-- Left section: Invoice title -->
                        <div class="col-md-3">
                            <h1 class="display-4 text-white font-weight-boldest mb-10 ml-5">INVOICE</h1>
                        </div>

                        <!-- Middle section: QR Code -->
                        <div class="col-md-6 text-center">
                            <h4 class="text-white">SCAN THIS QRIS</h4>
                            <img src="https://api.qrserver.com/v1/create-qr-code/?data={{$data->payment_code}}&size=200x200" alt="QRIS Code">
                        </div>

                        <!-- Right section: Business details -->
                        <div class="col-md-3 text-right">
                            <h4 class="text-white">{{$data->merchant->merchant_name ?? ''}}</h4>
                            <p class="text-white">{{$data->merchant->address ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Invoice header-->

            <!-- Rest of the invoice template remains the same -->
            <!-- begin: Invoice footer-->
            <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                <div class="col-md-9">
                    <div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">
                        <div class="d-flex flex-column mb-10 mb-md-0">
                            <div class="font-weight-bolder font-size-lg mb-3">QRIS</div>
                            <div class="d-flex justify-content-between">
                                <span class="mr-15 font-weight-bold">Status :</span>
                                <span class="text-right">{{$data->status}}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span class="mr-15 font-weight-bold">Tanggal Transaksi :</span>
                                <span class="text-right">{{$data->created_at}}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span class="mr-15 font-weight-bold">Nomor Transaksi :</span>
                                <span class="text-right">{{$data->trx_id}}</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="mr-15 font-weight-bold">Fullname :</span>
                                <span class="text-right">{{$data->fullname}}</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="mr-15 font-weight-bold">Email :</span>
                                <span class="text-right">{{$data->email}}</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="mr-15 font-weight-bold">Phone Number :</span>
                                <span class="text-right">{{$data->phone_number}}</span>
                            </div>

                        </div>
                        <div class="d-flex flex-column text-md-right">
                            <span class="font-size-lg font-weight-bolder mb-1">TOTAL PAYMENT</span>
                            <span class="font-size-h2 font-weight-boldest text-danger mb-1">Rp. {{number_format($data->amount, 0, ',', '.')}}</span>
                            <span>Taxes Included</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Invoice footer-->

            <!-- begin: Invoice action-->
            <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                <div class="col-md-9">
                    <div class="d-flex justify-content-between">
                        {{-- <button type="button" class="btn btn-light-primary font-weight-bold" onclick="window.print();">Download Invoice</button> --}}
                        {{-- <button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Print Invoice</button> --}}
                    </div>
                </div>
            </div>
            <!-- end: Invoice action-->
            <!-- end: Invoice-->
        </div>
    </div>
    <!-- end::Card-->
</div>
@endsection
