@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Merchant Bank</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">

                @if(Auth::user()->isAdmin())
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
                @endif

                <div class="text-right">
                    <a href="{{ route('merchant-bank.create') }}" class="btn btn-sm btn-primary">
                        <i class="flaticon-plus"></i>
                        Tambah Merchant Bank
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                @if(Auth::user()->isAdmin())
                                    <th>Nama Perusahaan</th>
                                @endif
                                <th>Nama Merchant</th>
                                <th>Nama Bank</th>
                                <th>No Rekening</th>
                                <th>Nama Pemilik</th>
                                <th>Verify Status</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                  <td>{{$loop->iteration}}</td>
                                  @if(Auth::user()->isAdmin())
                                      <th>{{$item->company->merchant_name}}</th>
                                  @endif
                                  <td>{{$item->merchant->merchant_name}}</td>
                                  <td>{{$item->bank_name}}</td>
                                  <td>{{$item->account_number}}</td>
                                  <td>{{$item->account_name}}</td>
                                  <td>{{$item->status}}</td>
                                  <td>{{$item->is_active == 0 ? 'INACTIVE' : 'ACTIVE'}}</td>
                                  <td>
                                    <a href="{{route('merchant-bank.edit', $item->id_hash)}}" class="btn btn-sm btn-primary">Edit</a>
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
