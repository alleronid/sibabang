@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List Transactions</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">

                @if(Auth::user()->isAdmin())
                    <div>
                        <div class="row">
                            <div class="form-group">
                                <label for="filterCompany">Filter by Company:</label>
                                <select id="filterCompany" class="form-control">
                                    <option value="">All Companies</option>
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->company_id }}">{{ $company->merchant_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group ml-3">
                                <label for="filterMerchant">Filter by Merchant:</label>
                                <select id="filterMerchant" class="form-control">
                                    <option value="">All Merchants</option>
                                    @foreach ($merchants as $merchant)
                                        <option value="{{ $merchant->merchant_id }}">{{ $merchant->merchant_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="text-right">
                    <a href="{{ route('transaction.create') }}" class="btn btn-sm btn-primary mb-3">
                        <i class="flaticon-plus"></i>
                        Add Transaction
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                @if(Auth::user()->isAdmin())
                                    <th>Nama Perusahaan</th>
                                    <th>Nama Merchant</th>
                                @endif
                                <th>Kode Transaksi</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Tanggal Transaksi</th>
                                <th>Tanggal Bayar</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                @if(Auth::user()->isAdmin())
                                    <th>{{$item->company->merchant_name}}</th>
                                    <th>{{$item->merchant->merchant_name}}</th>
                                @endif
                                <td>{{$item->trx_id}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->payed_at}}</td>
                                <td>
                                   <div class="dropdown open">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                                Dropdown
                                            </button>
                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                        <a class="dropdown-item" href="{{route('transaction.detail', $item->trx_id)}}">Payment Link</a>
                                        <a class="dropdown-item" href="#">Detail</a>
                                    </div>
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
@endsection

@push('addon-script')
    <script>
        $(document).ready(function() {
            var table = $('#dataTable').DataTable();
            var isAdmin = @json(Auth::user()->isAdmin());

            if (isAdmin){
                // Filter based on company and merchant
                $('#filterCompany, #filterMerchant').change(function() {
                    var selectedCompany = $('#filterCompany :selected').text();
                    var selectedMerchant = $('#filterMerchant :selected').text();
                    console.log(selectedCompany)

                    table.column(0).search(selectedCompany != 'All Companies' ? '^' + selectedCompany + '$' : '', true, false).draw();
                    table.search(selectedMerchant != 'All Merchants' ? selectedMerchant : '', true, false).draw();
                });
            }
        });
    </script>
@endpush
