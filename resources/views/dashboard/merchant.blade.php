@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h6>Welcome Back, {{ auth()->user()->name }}!</h6>
        <div class="col-md-3 mb-4">
            <select id="merchant_id" class="form-control">
                @foreach ($merchants as $item)
                    <option value="{{ $item->merchant_id }}" @if ($item->merchant_id == auth()->user()->merchant_id) selected @endif>
                        {{ $item->merchant_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="rounded-lg p-4"
            style="background: linear-gradient(135deg, #1e4532 0%, #2a5738 100%); box-shadow: 0 10px 20px rgba(0,0,0,0.1);">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-white-50 font-weight-light mb-1" style="font-size: 14px; letter-spacing: 0.5px;">Total
                        Balance</div>
                    <div class="text-white font-weight-bold" style="font-size: 32px; letter-spacing: -0.5px;"
                        id="TotalBalance"></div>
                    <div class="mt-2 d-flex align-items-center">
                        <span class="badge badge-pill py-1 px-2 mr-2"
                            style="background-color: rgba(255,255,255,0.1); font-size: 12px;">
                            <span style="color: #4ade80;" id="thisMonth"></span>
                        </span>
                        <span class="text-white-50" style="font-size: 13px;">this month</span>
                    </div>
                </div>

                <div class="d-flex">
                    <a id="disbursementLink" href="{{ route('wallet.disbursement', ['id_hash' => '__MERCHANT_ID__']) }}"
                        class="btn mr-2"
                        style="background-color: #4ade80; color: #0f3724; font-weight: 500; border-radius: 8px; padding: 8px 16px;">
                        <i class="fas fa-arrow-up mr-1"></i> Disbursement
                    </a>
                    <a id="reportLink" href="{{ route('wallet.list.disbursement', ['id_hash' => '__MERCHANT_ID__']) }}"
                        class="btn mr-2"
                        style="background-color: rgba(255,255,255,0.15); color: white; border-radius: 8px; padding: 8px 16px;">
                        <i class="fas fa-file-invoice mr-1"></i> Report
                    </a>
                </div>
            </div>

            <div class="mt-4 pt-3" style="border-top: 1px solid rgba(255,255,255,0.1);">
                <div class="d-flex justify-content-between">
                    <div class="text-white-50" style="font-size: 12px;">
                        <i class="fas fa-chart-line mr-1"></i> Analytics
                    </div>
                    <div class="text-white-50" style="font-size: 12px;">
                        <i class="fas fa-clock mr-1"></i> Last updated 2 hours ago
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-xxl-4 order-1 order-xxl-1">
                <!--begin::List Widget 1-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">List Merchants</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-8">
                        <!--begin::Item-->
                        @foreach ($merchants as $mrch)
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-primary mr-5">
                                    <span class="symbol-label">
                                        <span
                                            class="svg-icon svg-icon-primary svg-icon-xl"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Home.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column font-weight-bold">
                                    <a href="#"
                                        class="text-dark text-hover-primary mb-1 font-size-lg">{{ $mrch->merchant_name }}</a>
                                    <span class="text-muted">MID: {{ $mrch->merchant_id }}</span>
                                </div>
                                <!--end::Text-->
                            </div>
                        @endforeach

                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 1-->
            </div>
            <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
                <!--begin::List Widget 4-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark">List Transaction</h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::Item-->
                        @foreach ($transactions as $trx)
                            <div class="d-flex align-items-center mt-1">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-bar bg-success align-self-stretch"></span>
                                <!--end::Bullet-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1 ml-2">
                                    <a href="#"
                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">{{ $trx->trx_id }}</a>
                                    <span class="text-muted font-weight-bold">{{ $trx->created_at }}</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <span
                                    class="badge badge-{{ $trx->status == 'UNPAID' ? 'primary' : ($trx->status == 'PAID' ? 'success' : 'danger') }}">
                                    {{ $trx->status }}
                                </span>
                                <!--end::Dropdown-->
                            </div>
                        @endforeach
                        <!--end:Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:List Widget 4-->
            </div>
            <div class="col-lg-6 col-xxl-4">
               @include('dashboard.components.merchant-chart')
            </div>
        </div>
    </div>
@endsection


@push('addon-script')
    <script>
        $(document).ready(function() {
            let merchantId = $('#merchant_id').val();
            fetchWalletDetails(merchantId);
            updateLinks(merchantId)

            $('#merchant_id').on('change', function() {
                let selectedMerchantId = $(this).val();
                fetchWalletDetails(selectedMerchantId);
                updateLinks(selectedMerchantId);
            });

            function fetchWalletDetails(merchantId) {
                $.ajax({
                    url: '/app/detail-wallet/' + merchantId,
                    method: 'GET',
                    success: function(response) {
                        $('#TotalBalance').text(formatRupiah(response.wallet.avail_balance));
                        $('#thisMonth').text(formatRupiah(response.thisMonth));

                        // Extract chart data
                        let chartData = response.transactions.map(trx => trx.total_trx);
                        let chartCategories = response.transactions.map(trx => trx.bulan);

                        updateChart(chartData, chartCategories); // Update chart with new data
                    },
                    error: function(error) {
                        console.error('Error fetching wallet details:', error);
                    }
                });
            }

            function formatRupiah(value) {
                return 'Rp. ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            function updateLinks(merchantId) {
                let disbursementBaseUrl = "{{ route('wallet.disbursement', ['id_hash' => '__MERCHANT_ID__']) }}";
                let reportBaseUrl = "{{ route('wallet.list.disbursement', ['id_hash' => '__MERCHANT_ID__']) }}";

                disbursementBaseUrl = disbursementBaseUrl.replace('__MERCHANT_ID__', btoa(merchantId));
                reportBaseUrl = reportBaseUrl.replace('__MERCHANT_ID__', btoa(merchantId));

                $('#disbursementLink').attr('href', disbursementBaseUrl);
                $('#reportLink').attr('href', reportBaseUrl);
            }

            updateLinks($('#merchant_id').val());
        });
    </script>
@endpush
